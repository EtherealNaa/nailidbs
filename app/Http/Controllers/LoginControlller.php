<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginControlller extends Controller
{
    //
    public function index() {
        return view('admin.login.index', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/naili-administrator');
        }

        return back()->with('loginError', 'Login Tidak Berhasil');
    }
}
