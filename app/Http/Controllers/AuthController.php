<?php

namespace App\Http\Controllers;

use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login() {
        // echo "Login";
        // die();
        $data['metaTitle'] = 'Login';
        return view('auth.login', $data);
    }

    public function loginStore(Request $request) {
        // dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->is_role == '1') {
                return redirect()->intended('admin/dashboard');
            } else {
                return redirect('/')->with('error', 'Login Failed.');
            }
        } else {
            return redirect()->back()->with('error', 'Please Enter Your Correct Information.');
        }
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

    public function forgotPasswordStore(Request $request) {
        // dd($request->all());
        $count = User::where('email', '=', $request->email)->count();
        if ($count > 0) {
            $user = User::where('email', '=', $request->email)->first();
            $randomPassword = rand(111111, 999999);
            $user->password = Hash::make($randomPassword);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user, $randomPassword));
            return redirect()->back()->with('success', 'Password has been Sent Email.');
        } else {
            return redirect()->back()->with('error', 'Email Not Found.');
        }
    }

    public function logout() {
        Auth::logout();
        return redirect(url('/'));
    }
}
