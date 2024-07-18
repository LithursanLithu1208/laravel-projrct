<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\registercontroller;
use App\Http\Controllers\Auth\logincontroller;

Route::get('/register', function () {
    return view('auth\register');
});

Route::get('/',function(){
    return view('welcome');
});
Route::view('/home','home');

route::post('user-data',function(){
    $fullname =$request ->input('name');
    $username = $request -> input('User-name');
    $email = $request -> input('Email');
    $password = $request -> input('password');
    $confirm_password = $request -> input('password_confirmation');
    return redirect('/')->with('message','successfully submited');
});
route::get('/login',function(){
    return view('auth.login');
});
route::post('authentication',[logincontroller::class,'authenticate']);

route::post('store',[registercontroller::class,'store']);

route::get('logout',[logincontroler::class,'logout']);