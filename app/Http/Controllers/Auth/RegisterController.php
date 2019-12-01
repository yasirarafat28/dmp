<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use App\House;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],

            'nid' => ['required'],
            'phone' => ['required'],
            'father' => ['required'],
            'mother' => ['required'],
            'education' => ['required'],
            'occupation' => ['required'],
            'occupation_type' => ['required'],
            'occupation_institution' => ['required'],
            'family_member' => ['required'],
            'dob' => ['required'],
            'region' => ['required'],
            'permanent_area' => ['required'],
            'passport' => ['required'],
            'House_Name' => ['required'],
            'house_number' => ['required'],
            'area' => ['required'],
            'co_area' => ['required'],
            'section' => ['required'],
            'gate_number' => ['required'],
            'road_number' => ['required'],
            'flat_qty' => ['required'],
            'description' => ['required'],
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
        /*return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);*/
        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->phone = $data['phone'];
        $user->father = $data['father'];
        $user->mother = $data['mother'];
        $user->education = $data['education'];
        $user->occupation = $data['occupation'];
        $user->occupation_type = $data['occupation_type'];
        $user->occupation_institution = $data['occupation_institution'];
        $user->family_member = $data['family_member'];
        $user->gender = $data['gender'];
        $user->marital_status = $data['marital_status'];
        $user->dob = $data['dob'];
        $user->region = $data['region'];
        $user->permanent_area = $data['permanent_area'];
        $user->nid = $data['nid'];
        $user->passport = $data['passport'];
        $user->save();

        $house = new House();
        $house->House_Name = $data['House_Name'];
        $house->house_number = $data['house_number'];
        $house->area = $data['area'];
        $house->co_area = $data['co_area'];
        $house->section = $data['section'];
        $house->gate_number = $data['gate_number'];
        $house->road_number = $data['road_number'];
        $house->flat_qty = $data['flat_qty'];
        $house->description = $data['description'];
        $house->save();

        return $user;
    }
}
