<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartiesTypeController extends Controller
{
    public function partiesTypeList() {
        // echo "Parties Type List";
        // die();
        return view('admin.partiestype.list');
    }

    public function partiesTypeAdd() {
        // echo "Parties Type Add";
        // die();
        return view('admin.partiestype.add');
    }
}
