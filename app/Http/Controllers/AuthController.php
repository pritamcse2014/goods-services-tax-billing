<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function forgotPassword() {
        // echo "Forgot Password";
        // die();
        $data['metaTitle'] = 'Forgot Password';
        return view('auth.forgotpassword', $data);
    }
}
