<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;
use Carbon\carbon;

class RegistrationController extends Controller
{
    
    public function create(){

        return view('donors.signup');
    }

    public function store(){

        // Validate the form
       
        
         
        $this->validate(request(), [

            'name' => 'required',

            'phonenumber' => 'required|unique:users',

            'password' => 'required|confirmed',

            'bloodtype' => 'required|not_in:0',

            'city' => 'required|not_in:0',

            'age' => 'required|date|before_or_equal:'.\Carbon\Carbon::now()->subYears(18)->format('Y-m-d').'|after_or_equal:'.\Carbon\Carbon::now()->subYears(65)->format('Y-m-d')

        ],
        $customMessages = [
            'before_or_equal' => 'You must be 18 years old to donate blood.',
            'after_or_equal' => 'You cannot donate after the age of 65.'
        ]
    );

        // Encrypt the password
        $pass = request('password'); // get the password
        $password = bcrypt($pass);  // encrypt
        // Create and save the user 

        $user = new User;
        
        $user->phonenumber = request('phonenumber');

        $user->name = request('name');
        $age= Carbon::parse(request('age'))->age;
        $user->age = $age;

        $user->city = request('city');

        $user->bloodtype = request('bloodtype');

        $user->password = $password;

        $user->save();

        // Sign them in

        auth()->login($user);

        // Redirect to homepage

        return redirect()->home();
    }
}
