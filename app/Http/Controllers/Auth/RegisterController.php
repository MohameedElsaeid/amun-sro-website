<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\CompleteRegistrationJob;
use App\Jobs\UserRegisterEmailJob;
use App\Models\User;
use App\Services\Facebook\ConversionEventService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    public function showRegistrationForm(ConversionEventService $conversionService)
    {
        return view('website.auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Request $request
     * @return RedirectResponse|JsonResponse
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        $registerIp = $request->ip();

        event(new Registered($user = $this->create($request->all(), $registerIp)));

        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        UserRegisterEmailJob::dispatch($user->Email)->onQueue('emails');

        CompleteRegistrationJob::dispatch([
            'em' => $user->Email,
            'fn' => $user->StrUserID,
        ])->onQueue('pixel-event');

        $this->awardRegistrationPoints($user);

        // Determine the redirect URL
        $redirectTo = $request->input('redirect_to');
        if ($redirectTo && filter_var($redirectTo, FILTER_VALIDATE_URL)) {
            return $request->wantsJson()
                ? new JsonResponse([], 201)
                : redirect($redirectTo);
        }


        return $request->wantsJson()
            ? new JsonResponse([], 201)
            : redirect($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:TB_User,StrUserID'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:TB_User,Email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'username.required' => 'Please enter your username.',
            'username.string' => 'Your username must be a valid string.',
            'username.max' => 'Your username cannot exceed 255 characters.',
            'username.unique' => 'This username is already in use. Please choose a different one.',

            'email.required' => 'Please provide your email address.',
            'email.string' => 'Your email address must be a valid string.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Your email address cannot exceed 255 characters.',
            'email.unique' => 'This email is already registered. Please use a different email.',

            'password.required' => 'Please enter a password.',
            'password.string' => 'Your password must be a valid string.',
            'password.min' => 'Your password must be at least 8 characters long.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @param string $registerIp
     * @return User
     */
    protected function create(array $data, string $registerIp)
    {
        return User::create([
            'StrUserID' => $data['username'],
            'Email' => $data['email'],
            'password' => md5($data['password']),
            'reg_ip' => $registerIp,
        ]);
    }

    /**
     * Award registration points to the user
     *
     * @param User $user
     * @return void
     */
    protected function awardRegistrationPoints(User $user)
    {
        // Award 50 points for registration
        $user->points = 50;
        $user->save();

        // Set a flash message for the notification
        session()->flash('gamification_event', [
            'action' => 'register',
            'points' => 50,
            'total_points' => $user->points
        ]);
    }
}
