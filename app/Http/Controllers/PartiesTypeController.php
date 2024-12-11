<?php

namespace App\Http\Controllers;

use App\Models\PartiesType;
use Illuminate\Http\Request;

class PartiesTypeController extends Controller
{
    public function partiesTypeList() {
        // echo "Parties Type List";
        // die();
        $data['getRecord'] = PartiesType::getDetails();
        return view('admin.partiestype.list', $data);
    }

    public function partiesTypeAdd() {
        // echo "Parties Type Add";
        // die();
        return view('admin.partiestype.add');
    }

    public function partiesTypeStore(Request $request) {
        // dd($request->all());
        $save = $request->validate([
            'parties_type_name' => 'required'
        ]);

        $save = new PartiesType;
        $save->parties_type_name = trim($request->parties_type_name);
        $save->save();

        return redirect('admin/partiesType')->with('success', 'Parties Name Create Successfully.');
    }
}
