<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GSTBills extends Model
{
    use HasFactory;

    protected $table = 'gst_bills';

    static public function getDetails() {
        $return = self::select('gst_bills.*', 'parties_type.parties_type_name')
            ->join('parties_type', 'gst_bills.parties_type_id', '=', 'parties_type.id')
            ->orderBy('gst_bills.id', 'desc')
            ->paginate(10);
    
        return $return;
    }
}
