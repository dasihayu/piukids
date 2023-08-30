<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('admin.login', [
            'title' => 'Admin Login'
        ]);
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt($request->only('name', 'password'))) {
            return redirect('admin/post');
        }

        return redirect('admin/login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('admin/login');
    }
}
