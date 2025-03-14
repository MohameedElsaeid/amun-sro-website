<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\UserRegisterEmail;
use App\Models\User;
use App\Services\Facebook\ConversionEventService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Mail;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

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
     * @param ConversionEventService $conversionService
     * @return RedirectResponse|JsonResponse
     * @throws ConnectionException
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function register(Request $request, ConversionEventService $conversionService)
    {
        $this->validator($request->all())->validate();

        $registerIp = $request->ip();
        event(new Registered($user = $this->create($request->all(), $registerIp)));

        $this->guard()->login($user);
        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        $conversionService->trackRegister(
            userData: [
                'em' => $user->Email,
                'fn' => $user->StrUserID,
            ],
        );

        Mail::to($user->Email)->send(new UserRegisterEmail());

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
}
