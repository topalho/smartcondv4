<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    public function dashboard()
    {
        if (Auth::check() == true) {

            return view('admin');
        }
        return redirect()->route('admin.login');
    }

    public function showLoginForm()
    {
        return view('formLogin');

    }
    public function login(Request $request)
    {
        
    }
}
