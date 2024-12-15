<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Parties extends Model
{
    use HasFactory;

    protected $table = 'parties';

    static public function getDetails($request) {
        $return = self::select('parties.id', 'parties_type.parties_type_name', 'parties.parties_type_id', 'parties.full_name', 'parties.phone_no', 'parties.address', 'parties.account_holder_name', 'parties.account_no', 'parties.bank_name', 'parties.ifsc_code', 'parties.branch_address')
        ->join('parties_type', 'parties.parties_type_id', '=', 'parties_type.id')
        ->orderBy('parties.id', 'desc');
        if (!empty(Request::get('id'))) {
            $return = $return->where('parties.id', '=', Request::get('id'));
        } if (!empty(Request::get('parties_type_name'))) {
            $return = $return->where('parties_type.parties_type_name', 'LIKE', '%' . Request::get('parties_type_name') . '%');
        } if (!empty(Request::get('full_name'))) {
            $return = $return->where('parties.full_name', 'LIKE', '%' . Request::get('full_name') . '%');
        } if (!empty(Request::get('phone_no'))) {
            $return = $return->where('parties.phone_no', 'LIKE', '%' . Request::get('phone_no') . '%');
        } if (!empty(Request::get('address'))) {
            $return = $return->where('parties.address', 'LIKE', '%' . Request::get('address') . '%');
        } if (!empty(Request::get('account_holder_name'))) {
            $return = $return->where('parties.account_holder_name', 'LIKE', '%' . Request::get('account_holder_name') . '%');
        } if (!empty(Request::get('account_no'))) {
            $return = $return->where('parties.account_no', 'LIKE', '%' . Request::get('account_no') . '%');
        } if (!empty(Request::get('bank_name'))) {
            $return = $return->where('parties.bank_name', 'LIKE', '%' . Request::get('bank_name') . '%');
        } if (!empty(Request::get('ifsc_code'))) {
            $return = $return->where('parties.ifsc_code', 'LIKE', '%' . Request::get('ifsc_code') . '%');
        } if (!empty(Request::get('branch_address'))) {
            $return = $return->where('parties.branch_address', 'LIKE', '%' . Request::get('branch_address') . '%');
        } if (!empty(Request::get('created_at'))) {
            $return = $return->where('parties.created_at', 'LIKE', '%' . Request::get('created_at') . '%');
        } if (!empty(Request::get('updated_at'))) {
            $return = $return->where('parties.updated_at', 'LIKE', '%' . Request::get('updated_at') . '%');
        }
        $return = $return->paginate(10);
        return $return;
    }

    // System - 2 (Security)
    // static public function singleGetEdit($id) {
    //     return self::find($id);
    // }
}
