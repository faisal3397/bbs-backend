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

            'password' => 'required'

        ]);

        // Create and save the user

        $user = User::create(request(['phonenumber', 'name', 'password', 'city', 'bloodtype', 'age']));

        // Sign them in

        auth()->login($user);

        // Redirect to homepage

        return redirect()->home();
    }
}
