<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Money extends Model
{
    protected $table = 'tbl_money';
    const UPDATED_AT = null;
    const CREATED_AT = null;

    public function getData(){
        $moneydata = DB::table($this->table)->get();
        return $moneydata;
    }
}
