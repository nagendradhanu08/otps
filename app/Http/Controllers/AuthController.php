<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;




class AuthController extends Controller
{
    public function loginPage()
    {
        return view('Front.Auth.Login');
    }

    public function registerPage()
    {
        return view('Front.Auth.Register');
    }

    public function login(Request $request)
    {
        if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication passed...
            return "success";
        }
    }

    public function register(Request $request)
    {
        $user = new User();

        $user->name =$request->name;
        $user->email = $request->email;
        $user->password = \Hash::make($request->password);
        $user->role= 'travaller';
        $user->save();

        return "Travaller Added";
    }
}
