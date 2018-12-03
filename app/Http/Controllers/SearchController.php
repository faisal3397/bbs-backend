<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller
{
    public function find() {
        
  
    $city='Riyadh';
    $bloodtype =  Input::get( 'bloodtype' );
    $city = Input::get( 'city');
    $donors = User::where('bloodtype',$bloodtype)->where('city',$city)->get();    
    if($donors->isNotEmpty()) {
    return view('searchResult', compact('donors') );
    }
    else {
        return view('searchResult',compact('donors','No results found!'));
    }
    
    }
}
