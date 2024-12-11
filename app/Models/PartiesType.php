<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartiesType extends Model
{
    use HasFactory;

    protected $table = 'parties_type';

    static public function getDetails() {
        $return = self::select('parties_type.*')
                ->orderBy('id', 'desc');
        $return = $return->paginate(10);
        return $return;
    }

    // System - 2 (Security)
    // static public function singleGetEdit($id) {
    //     return self::find($id);
    // }
}
