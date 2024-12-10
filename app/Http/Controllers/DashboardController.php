<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard() {
        if (Auth::User()->is_role == 1) {
            return view('admin.dashboard');
        }
    }
}
