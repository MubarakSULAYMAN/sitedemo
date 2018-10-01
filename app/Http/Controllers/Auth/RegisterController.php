<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Notifications\UserActivate;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;


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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'surname' => 'required | string | between: 2, 31',
            'firstname' => 'required | string | between: 2, 31',
            'username' => 'required | string | between: 2, 20',
            'email' => 'required | string | email | between: 7, 51',
            // 'phone' => 'required| regex: /^([0-9\s\-\+\(\)]*)$/',
            'password' => 'required | string | between: 6, 21 | confirmed',
            // 'password' => 'required | string | min: 6 | between: 6, 21 | confirmed | regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/ | invalid: 123456, password, PASSWORD, Password, PaSsWoRd, pAsSwOrD, passWord, passworD, PassWord, PassWorD, passWORD, pASswORd nor PASSword',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'surname' => $data['surname'],
            'firstname' => $data['firstname'],
            'username' => $data['username'],
            'email' => $data['email'],
            // 'phone' => $data['phone'],
            'password' => Hash::make($data['password']),
            // 'password' => bcrypt($data['password']) ,
            'token' => str_random(40) . time(),

            // For admin
            'type' => User::DEFAULT_TYPE,
        ]);
        
        $user->notify(new UserActivate($user));

        return $user;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        return redirect()->route('login')
            ->with(['success' => 'Congratulations on your account registeration, kindly check your email to activate it.']);
    }

    /**
     * @param $token
     */
    public function activate($token = null)
    {
        $user = User::where('token', $token)->first();

        if (empty($user)) {
            return redirect()->to('/')
                ->with(['error' => 'Your activation code is either expired or invalid.']);
        }

        $user->token = '';
        $user->active = User::ACTIVE;

        $user->save();

        return redirect()->route('login')
            ->with(['success' => 'Congratulations, you can proceed. Your account is now activated.']);
    }
}