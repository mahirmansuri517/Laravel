<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function demo(){
        return view('form');
    }
    
    public function register(Request $request){
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',
                'confirm_password' => 'required|same:password' 

            ]
        );
        echo "<pre>";
        print_r($request->all());
    }
}
