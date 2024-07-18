<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;

class logincontroller extends Controller
{
    public function  authenticate(Request $request){
$request->validation(
    [
        'Email'=>'required',
        'password'=>'required'
    ]);
    $Email = $request-> input('Email');
    $password = $request-> input('password');

    if(Auth::attempt(['Email'=>$Email,'password'=>$password])){
        $user=user::where('email',$Email)->first();
        Auth::login($user);
        return \redirect('/homre');
    }
    else{
        return back()->withErrors(['Invalid ']);
    }
    }
    public function logout(){
        Aauth::logout();
        return redirect('/login');
    }
}
