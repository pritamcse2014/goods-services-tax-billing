<?php

namespace App\Http\Controllers;

use App\Models\Parties;
use App\Models\PartiesType;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class PartiesTypeController extends Controller
{
    public function partiesTypeList(Request $request) {
        // echo "Parties Type List";
        // die();
        $data['getRecord'] = PartiesType::getDetails($request);
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

    public function partiesTypePdfGenerator() {
        $getPartiesType = PartiesType::get();
        $data = [
            'title' => 'Welcome to GST Billing.',
            'date'  => date('d-m-Y'),
            'parties' => $getPartiesType
        ];
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('partiesTypePDF', $data);
        return $pdf->download('partiesType.pdf');
    }

    public function partiesTypePdfSingleDownload($id) {
        $data['getPartiesType'] = PartiesType::find($id);
        $data['title'] = 'Programming & Web Development Tutorials and Scripts';
        $data['subtitle'] = 'I am a professional Web Developer (PHP, JS, Laravel, React JS, MySql and API etc), with 1 years + of experience. If you have any website related work then let us know. Should you need any further information do not hesitate to contact me.';
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('partiesTypePDFSingle', $data);
        return $pdf->download('partiesTypeSingle.pdf');
    }

    public function partiesList(Request $request) {
        // echo "Parties List";
        // die();
        $data['getRecord'] = Parties::getDetails($request);
        return view('admin.parties.list', $data);
    }

    public function partiesAdd() {
        // echo "Parties Add";
        // die();
        $data['getPartiesType'] = PartiesType::get();
        return view('admin.parties.add', $data);
    }

    public function partiesStore(Request $request) {
        // dd($request->all());
        $save = new Parties;
        $save->parties_type_id = trim($request->parties_type_id);
        $save->full_name = trim($request->full_name);
        $save->phone_no = trim($request->phone_no);
        $save->address = trim($request->address);
        $save->account_holder_name = trim($request->account_holder_name);
        $save->account_no = trim($request->account_no);
        $save->bank_name = trim($request->bank_name);
        $save->ifsc_code = trim($request->ifsc_code);
        $save->branch_address = trim($request->branch_address);
        $save->save();
        
        return redirect('admin/parties')->with('success', 'Parties Create Successfully.');
    }

    public function partiesEdit($id) {
        // echo $id;
        // die();
        // dd($id);
        // System - 1
        $data['getParties'] = Parties::find($id);
        // System - 2 (Security)
        // $data['getParties'] = Parties::singleGetEdit($id);
        $data['getPartiesType'] = PartiesType::get();
        return view('admin.parties.edit', $data);
    }

    public function partiesUpdate(Request $request, $id) {
        $save = Parties::find($id);
        $save->parties_type_id = trim($request->parties_type_id);
        $save->full_name = trim($request->full_name);
        $save->phone_no = trim($request->phone_no);
        $save->address = trim($request->address);
        $save->account_holder_name = trim($request->account_holder_name);
        $save->account_no = trim($request->account_no);
        $save->bank_name = trim($request->bank_name);
        $save->ifsc_code = trim($request->ifsc_code);
        $save->branch_address = trim($request->branch_address);
        $save->save();
        
        return redirect('admin/parties')->with('success', 'Parties Updated Successfully.');
    }

    public function partiesDelete($id) {
        // echo $id;
        // dd($id);
        $save = Parties::find($id);
        $save->delete();

        return redirect('admin/parties')->with('success', 'Parties Deleted Successfully.');
    }

    public function partiesPdfGenerator() {
        // echo "PDF Generator";
        // die();
        $getParties = Parties::select('parties.*', 'parties_type.parties_type_name')
                    ->join('parties_type', 'parties_type.id', '=', 'parties.parties_type_id')
                    ->get();
        $data = [
            'title' => 'Welcome to GST Billing.',
            'date'  => date('d-m-Y'),
            'parties' => $getParties
        ];
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('partiesPDF', $data);
        return $pdf->download('parties.pdf');
    }

    public function partiesPdfSingleDownload($id) {
        $data['getParties'] = Parties::find($id);
        $data['title'] = 'Programming & Web Development Tutorials and Scripts';
        $data['subtitle'] = 'I am a professional Web Developer (PHP, JS, Laravel, React JS, MySql and API etc), with 1 years + of experience. If you have any website related work then let us know. Should you need any further information do not hesitate to contact me.';
        $pdf = app('dompdf.wrapper');
        $pdf->loadView('partiesPDFSingle', $data);
        return $pdf->download('partiesSingle.pdf');
    }

    public function partiesView($id) {
        $data['getParties'] = Parties::find($id);
        return view('admin.parties.view', $data);
    }
}
