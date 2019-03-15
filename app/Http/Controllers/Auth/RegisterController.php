<?php

namespace App\Http\Controllers\Auth;

use App\Model\UserDetail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
            'name' => ['required', 'string', 'max:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'first_name'    => 'required|string|max:190',
            'middle_name'   => 'nullable|string|max:190',
            'last_name'     => 'nullable|string|max:190',
            'birthday'      => 'nullable|date|date_format:Y-m-d|before:2019-01-01',

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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ])->userDetail()->create([
            'first_name'    => $data['first_name'],
            'middle_name'   => $data['middle_name'],
            'last_name'     => $data['last_name'],
            'birthday'      => $data['birthday'],
        ]);

//        $userDetail = new UserDetail();
//        $userDetail->user_id        = $user->id;
//        $userDetail->first_name     = $data['first_name'];
//        $userDetail->middle_name    = $data['middle_name'];
//        $userDetail->last_name      = $data['last_name'];
//        $userDetail->birthday       = $data['birthday'];
//        $userDetail->save();

        return $user;
    }
}
