<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

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

            'password' => 'required|confirmed'

        ]);

        // Encrypt the password
        $pass = request('password'); // get the password
        $password = bcrypt($pass);  // encrypt
        // Create and save the user

        $user = new User;
        
        $user->phonenumber = request('phonenumber');

        $user->name = request('name');

        $user->age = request('age');

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
