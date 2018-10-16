<?php

namespace App\Http\Controllers;

use App\Donor;

class DonorsController extends Controller
{
    public function index(){
        
        $donors = Donor::all();

        return view('donors.index', compact('donors'));

    }


    public function show(Donor $donor){
            
      
        return view('donors.show', compact('donor'));
    }

    public function signup(){

        return view('donors.signup');

    }

    public function signin(){

        return view('donors.signin');

    }
}
