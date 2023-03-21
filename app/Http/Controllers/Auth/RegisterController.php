<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'phone_number' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }


    protected function companyValidator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', Rule::unique('companies'), 'min:2', 'max:25'],
            'email' => ['required', Rule::unique('companies'), 'min:2', 'max:25'],
            'password' => ['required', 'min:2', 'max:25', 'confirmed'],
            'phone_number' => ['required', 'min:2', 'max:35'],
            'building_number' => ['required', 'integer', 'max:15'],
            'floor_number' => ['required', 'integer', 'max:15'],
            'locker_number' => ['required', 'integer', 'max:15'],
            'price' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'username' => $data['username'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    protected function companyCreate(array $data)
    {

        $company =  Company::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'phone_number' => $data['phone_number'],
            'building_number' => $data['building_number'],
            'floor_number' => $data['floor_number'],
            'price' => $data['price']
        ]);

        $number_b = 1;
        $number_l = 1;

        // create building for this company
        for ($i = 0; $i < $data['building_number']; $i++) {

            $building = $company->buildings()->create([
                'number' => $i + 1
            ]);

            for ($j = 0; $j < $data['floor_number']; $j++) {
                $floor = $building->floors()->create([
                    'number' => $number_b++
                ]);

                for ($h = 0; $h < $data['locker_number']; $h++) {
                    $floor->lockers()->create([
                        'number' => $number_l++
                    ]);
                }
            }
        }

        return $company;
    }
}
