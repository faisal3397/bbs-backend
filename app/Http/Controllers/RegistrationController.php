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

            'city' => 'required|not_in:0'

        ]);

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
