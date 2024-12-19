<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function adminSetting() {
        // echo "Admin Setting";
        // die();
        $data['getRecord'] = Setting::find(1);
        return view('admin.setting.update', $data);
    }

    public function adminSettingUpdate(Request $request) {
        // dd($request->all());
        $save = Setting::find(1);
        $save->website_name = trim($request->website_name);
        if (!empty($request->file('website_logo'))) {
            if (!empty($request->website_logo) && file_exists('upload/' . $save->website_logo)) {
                unlink('upload/' .$save->website_logo);
            }
            $file = $request->file('website_logo');
            $randomStr = Str::random(30);
            $fileName = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('upload/', $fileName);
            $save->website_logo = $fileName;
        }
        if (!empty($request->file('website_favicon'))) {
            if (!empty($request->website_favicon) && file_exists('upload/' . $save->website_favicon)) {
                unlink('upload/' .$save->website_favicon);
            }
            $file = $request->file('website_favicon');
            $randomStr = Str::random(30);
            $fileName = $randomStr . '.' . $file->getClientOriginalExtension();
            $file->move('upload/', $fileName);
            $save->website_favicon = $fileName;
        }
        $save->save();
        
        return redirect('admin/setting')->with('success', 'Setting Updated Successfully.');
    }
}
