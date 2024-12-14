<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class PartiesType extends Model
{
    use HasFactory;

    protected $table = 'parties_type';

    static public function getDetails($request) {
        $return = self::select('parties_type.*')
                ->orderBy('id', 'desc');
        if (!empty(Request::get('id'))) {
            $return = $return->where('parties_type.id', '=', Request::get('id'));
        } if (!empty(Request::get('parties_type_name'))) {
            $return = $return->where('parties_type.parties_type_name', 'LIKE', '%' . Request::get('parties_type_name') . '%');
        } if (!empty(Request::get('created_at'))) {
            $return = $return->where('parties_type.created_at', 'LIKE', '%' . Request::get('created_at') . '%');
        } if (!empty(Request::get('updated_at'))) {
            $return = $return->where('parties_type.updated_at', 'LIKE', '%' . Request::get('updated_at') . '%');
        }
        $return = $return->paginate(10);
        return $return;
    }

    // System - 2 (Security)
    // static public function singleGetEdit($id) {
    //     return self::find($id);
    // }
}
