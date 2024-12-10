<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login() {
        // echo "Login";
        // die();
        $data['metaTitle'] = 'Login';
        return view('auth.login', $data);
    }

    public function register() {
        // echo "Register";
        // die();
        $data['metaTitle'] = 'Register';
        return view('auth.register', $data);
    }

    public function registerStore(Request $request) {
        // dd($request->all());
        $save = $request->validate([
            'name' => 'required',
            'email' => 'required | unique:users',
            'password' => 'required | min:6',
        ]);

        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->remember_token = Str::random(50);
        $save->save();

        return redirect('/')->with('success', 'Registration Successfully.');
    }

    public function forgotPassword() {
        // echo "Forgot Password";
        // die();
        $data['metaTitle'] = 'Forgot Password';
        return view('auth.forgotpassword', $data);
    }
}
