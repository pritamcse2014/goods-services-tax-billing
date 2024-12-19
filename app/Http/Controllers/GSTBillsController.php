<?php

namespace App\Http\Controllers;

use App\Models\GSTBills;
use App\Models\PartiesType;
use Illuminate\Http\Request;

class GSTBillsController extends Controller
{
    public function gstBillsList(Request $request) {
        // echo "GST Billing List";
        // die();
        $data['getRecord'] = GSTBills::getDetails($request);
        return view('admin.gstbills.list', $data);
    }

    public function gstBillsAdd() {
        // echo "Parties Type Add";
        // die();
        $data['getPartiesType'] = PartiesType::get();
        return view('admin.gstbills.add', $data);
    }

    public function gstBillsStore(Request $request) {
        // dd($request->all());
        $save = new GSTBills;
        $save->parties_type_id = trim($request->parties_type_id);
        $save->invoice_date = trim($request->invoice_date);
        $save->invoice_no = trim($request->invoice_no);
        $save->item_description = trim($request->item_description);
        $save->total_amount = trim($request->total_amount);
        $save->cgst_rate = trim($request->cgst_rate);
        $save->sgst_rate = trim($request->sgst_rate);
        $save->igst_rate = trim($request->igst_rate);
        $save->cgst_amount = trim($request->cgst_amount);
        $save->sgst_amount = trim($request->sgst_amount);
        $save->igst_amount = trim($request->igst_amount);
        $save->tax_amount = trim($request->tax_amount);
        $save->net_amount = trim($request->net_amount);
        $save->declaration = trim($request->declaration);
        $save->save();

        return redirect('admin/gstBills')->with('success', 'GST Bills Create Successfully.');
    }

    public function gstBillsEdit($id) {
        // echo $id;
        // die();
        // dd($id);
        $data['getPartiesType'] = PartiesType::get();
        $data['gstBills'] = GSTBills::find($id);
        return view('admin.gstBills.edit', $data);
    }
    
    public function gstBillsUpdate(Request $request, $id) {
        $save = GSTBills::find($id);
        $save->parties_type_id = trim($request->parties_type_id);
        $save->invoice_date = trim($request->invoice_date);
        $save->invoice_no = trim($request->invoice_no);
        $save->item_description = trim($request->item_description);
        $save->total_amount = trim($request->total_amount);
        $save->cgst_rate = trim($request->cgst_rate);
        $save->sgst_rate = trim($request->sgst_rate);
        $save->igst_rate = trim($request->igst_rate);
        $save->cgst_amount = trim($request->cgst_amount);
        $save->sgst_amount = trim($request->sgst_amount);
        $save->igst_amount = trim($request->igst_amount);
        $save->tax_amount = trim($request->tax_amount);
        $save->net_amount = trim($request->net_amount);
        $save->declaration = trim($request->declaration);
        $save->save();

        return redirect('admin/gstBills')->with('success', 'GST Bills Updated Successfully.');
    }

    public function gstBillsDelete($id) {
        // echo $id;
        // dd($id);
        $save = GSTBills::find($id);
        $save->delete();

        return redirect('admin/gstBills')->with('success', 'GST Bills Deleted Successfully.');
    }

    public function gstBillsView($id) {
        $data['gstBills'] = GSTBills::find($id);
        return view('admin.gstBills.view', $data);
    }

    public function gstBillsPdfGenerator() {
        // echo "PDF Generator";
        // die();
        $getGstBills = GSTBills::select('gst_bills.*', 'parties_type.parties_type_name')
                    ->join('parties_type', 'parties_type.id', '=', 'gst_bills.parties_type_id')
                    ->get();
        $data = [
            'title' => 'Welcome to GST Billing.',
            'date'  => date('d-m-Y'),
            'gstBills' => $getGstBills
        ];
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('gstBillsPDF', $data);
        return $pdf->download('gstBills.pdf');
    }
}
