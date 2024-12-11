<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parties extends Model
{
    use HasFactory;

    protected $table = 'parties';

    static public function getDetails() {
        $return = self::select('parties.id', 'parties_type.parties_type_name', 'parties.parties_type_id', 'parties.full_name', 'parties.phone_no', 'parties.address', 'parties.account_holder_name', 'parties.account_no', 'parties.bank_name', 'parties.ifsc_code', 'parties.branch_address')
        ->join('parties_type', 'parties.parties_type_id', '=', 'parties_type.id')
        ->orderBy('parties.id', 'desc')
        ->paginate(10);

    return $return;
    }
}
