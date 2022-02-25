<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Http\Requests\regRequest;


class 	RegistrationController extends Controller

    {

     public function index()
        {
        return view('registration.signup');
    }

   public function verify(Request $request){
        $user = new User;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password =$request->password;
        $user->is_active="1";
        $user->save();
        return redirect('/login');
    }

     
    }


