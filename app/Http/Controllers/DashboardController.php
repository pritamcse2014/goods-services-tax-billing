<?php

namespace App\Http\Controllers;

use App\Models\GSTBills;
use App\Models\Parties;
use App\Models\PartiesType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard() {
        if (Auth::User()->is_role == 1) {
            $data['partiesType'] = PartiesType::count();
            $data['parties'] = Parties::count();
            $data['gstBills'] = GSTBills::count();
            return view('admin.dashboard', $data);
        }
    }
}
