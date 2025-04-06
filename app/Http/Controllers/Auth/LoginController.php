<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\LoginEventJob;
use App\Models\TBUser;
use App\Models\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;
use Symfony\Component\HttpFoundation\Response;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected string $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function showLoginForm()
    {
        return view('website.auth.login');
    }


    /**
     * Handle a login request to the application.
     *
     * @param Request $request
     * @return JsonResponse|RedirectResponse|Response
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            LoginEventJob::dispatch(getTrackingData([
                'em' => $request->user()->Email,
                'fn' => $request->user()->StrUserID,
            ]))->onQueue('pixel-event');

            $this->awardLoginPoints($request->user());

            // Determine the redirect URL
            $redirectTo = $request->input('redirect_to');
            if ($redirectTo && filter_var($redirectTo, FILTER_VALIDATE_URL)) {
                return redirect($redirectTo);
            }

            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    /**
     * Validate the user login request.
     *
     * @param Request $request
     * @return void
     *
     * @throws ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'StrUserID';  // Use StrUserID as authentication identifier
    }

    /**
     * Attempt to log the user into the application.
     *
     * @param Request $request
     * @return bool
     */
    protected function attemptLogin(Request $request)
    {
        // Manually find user and verify credentials
        $user = TBUser::where('StrUserID', $request->input($this->username()))
            ->first();
        if (!$user) {
            return false;
        }

        // Verify MD5 password
        if (md5($request->password) === $user->password) {
            Auth::login($user, $request->filled('remember'));
            return true;
        }

        return false;
    }

    /**
     * Award login points to the user
     *
     * @param TBUser $user
     * @return void
     */
    protected function awardLoginPoints(TBUser $user)
    {
        $lastLoginDate = $user->last_login_bonus ? Carbon::parse($user->last_login_bonus)->toDateString() : null;
        $today = Carbon::today()->toDateString();

        // Only award points once per day
        if ($lastLoginDate !== $today) {
            // Award 10 points for login
            $user->points = ($user->points ?? 0) + 10;
            $user->last_login_bonus = $today;
            $user->save();

            // Set a flash message for the notification
            session()->flash('gamification_event', [
                'action' => 'login',
                'points' => 10,
                'total_points' => $user->points
            ]);
        }
    }

}
