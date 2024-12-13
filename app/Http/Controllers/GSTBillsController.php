<?php

namespace App\Http\Controllers;

use App\Models\PartiesType;
use Illuminate\Http\Request;

class GSTBillsController extends Controller
{
    public function gstBillsList() {
        // echo "GST Billing List";
        // die();
        return view('admin.gstbills.list');
    }

    public function gstBillsAdd() {
        // echo "Parties Type Add";
        // die();
        $data['getPartiesType'] = PartiesType::get();
        return view('admin.gstbills.add', $data);
    }
}
