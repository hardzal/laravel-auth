<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function getLogin() {
        return view('login');
    }

    public function postLogin(Request $request) {
        if(!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->back();
        }

        return redirect()->route('home');
    }

    public function getRegister() {
        return view('register');
    }

    public function postRegister(Request $request) {
        $this->validate($request, [
            'username' => 'required|min:4',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // user login
        // auth()->loginUsingId($user->id)

        return redirect()->route('login');
    }

    public function logout() {
        \Auth::logout();

        return redirect()->route('welcome');
    }
}
