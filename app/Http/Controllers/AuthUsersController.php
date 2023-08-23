<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthUsersController extends Controller
{
    public function checkUserLogin()
    {
        if (isset(auth()->user()->name)) {
            return view('admin.home');
        }

        return view('adminlogin');
    }

    public function loginUser(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/admin');
        }

        return Redirect::back()->withErrors(['error' => 'Kullanıcı adı veya şifre hatalıdı lütfen tekrar deneyin']);
    }

    public function logOutUser()
    {
        Auth::logout();
        return redirect('/admin');
    }
}
