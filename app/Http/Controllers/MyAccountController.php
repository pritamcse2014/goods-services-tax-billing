<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class MyAccountController extends Controller
{
    public function myAccount() {
        // echo "My Account";
        // die();
        $data['getRecord'] = User::find(Auth::user()->id);
        return view('admin.myaccount.update', $data);
    }

    public function myAccountUpdate(Request $request) {
        // dd($request->all());
        $user = request()->validate([
            'email' => 'required | unique:users,email,' .Auth::user()->id
        ]);

        $user = User::find(Auth::user()->id);
        $user->name = trim($request->name);
        $user->email = trim($request->email);
        if (!empty($request->password)) {
            $user->password = Hash::make($request->password);
        } if (!empty($request->file('profile_image'))) {
            if (!empty($request->profile_image) && file_exists('upload/' . $user->profile_image)) {
                unlink('upload/' .$user->profile_image);
            }
            $file = $request->file('profile_image');
            $randomStr = Str::random(30);
            $fileName = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('upload/', $fileName);
            $user->profile_image = $fileName;
        }
        $user->save();
        
        return redirect('admin/myAccount')->with('success', 'My Account Updated Successfully.');
    }
}
