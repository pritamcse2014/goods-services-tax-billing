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

    public function partiesTypeEdit($id) {
        // echo $id;
        // die();
        // dd($id);
        // System - 1
        $data['getRecord'] = PartiesType::find($id);
        // System - 2 (Security)
        // $data['getRecord'] = PartiesType::singleGetEdit($id);
        return view('admin.partiestype.edit', $data);
    }

    public function partiesTypeUpdate(Request $request, $id) {
        // dd($request->all());
        $save = $request->validate([
            'parties_type_name' => 'required'
        ]);

        $save = PartiesType::find($id);
        $save->parties_type_name = trim($request->parties_type_name);
        $save->save();

        return redirect('admin/partiesType')->with('success', 'Parties Name Updated Successfully.');
    }

    public function partiesTypeDelete($id) {
        // echo $id;
        // dd($id);
        $save = PartiesType::find($id);
        $save->delete();

        return redirect('admin/partiesType')->with('success', 'Parties Name Deleted Successfully.');
    }

    public function partiesList() {
        // echo "Parties List";
        // die();
        return view('admin.parties.list');
    }

    public function partiesAdd() {
        // echo "Parties Add";
        // die();
        $data['getPartiesType'] = PartiesType::get();
        return view('admin.parties.add', $data);
    }
}
