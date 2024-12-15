<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class GSTBills extends Model
{
    use HasFactory;

    protected $table = 'gst_bills';

    static public function getDetails($request) {
        $return = self::select('gst_bills.*', 'parties_type.parties_type_name')
            ->join('parties_type', 'gst_bills.parties_type_id', '=', 'parties_type.id')
            ->orderBy('gst_bills.id', 'desc');
            if (!empty(Request::get('id'))) {
                $return = $return->where('gst_bills.id', '=', Request::get('id'));
            } if (!empty(Request::get('parties_type_name'))) {
                $return = $return->where('parties_type.parties_type_name', 'LIKE', '%' . Request::get('parties_type_name') . '%');
            } if (!empty(Request::get('invoice_date'))) {
                $return = $return->where('gst_bills.invoice_date', 'LIKE', '%' . Request::get('invoice_date') . '%');
            } if (!empty(Request::get('invoice_no'))) {
                $return = $return->where('gst_bills.invoice_no', 'LIKE', '%' . Request::get('invoice_no') . '%');
            } if (!empty(Request::get('total_amount'))) {
                $return = $return->where('gst_bills.total_amount', 'LIKE', '%' . Request::get('total_amount') . '%');
            } if (!empty(Request::get('tax_amount'))) {
                $return = $return->where('gst_bills.tax_amount', 'LIKE', '%' . Request::get('tax_amount') . '%');
            } if (!empty(Request::get('net_amount'))) {
                $return = $return->where('gst_bills.net_amount', 'LIKE', '%' . Request::get('net_amount') . '%');
            }
            $return = $return->paginate(10);
            return $return;
    }

    public function getGSTBillsView() {
        return $this->belongsTo(PartiesType::class, 'parties_type_id');
    }
}
