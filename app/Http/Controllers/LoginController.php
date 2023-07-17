<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index(){
        return view('admin.login',[
            'title'=>'Admin Login'
        ]);
    }

    public function login(Request $request)
    {
        $credentials = $request->only('name', 'password');

        if (Auth::attempt($credentials)) {
            // Jika autentikasi berhasil, arahkan ke halaman utama atau halaman yang diinginkan
            return redirect()->intended('/');
        } else {
            // Jika autentikasi gagal, kembali ke halaman login dengan pesan error
            return back()->withErrors(['name' => 'Invalid credentials']);
        }
    }
}
