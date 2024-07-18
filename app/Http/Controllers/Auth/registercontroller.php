<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Auth;

class registercontroller extends Controller
{
    public function store(Request $request){
        $request->validate(
            [
                'name'=>'required',
                'User_name'=>'required',
                'Email'=>'required',
                'password'=>'required|confirmed'

            ]
            );
            $user = new user;
            $user-> name=$request->input('name');
            $user-> User_name=$request->input('User_name');
            $user-> Email=$request->input('Email');
            $user-> password=$request->input('password');
            $user-> save();

            Auth::login($user);
            return redirect('/home');

    }
}
