<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class rumahsakit extends Model
{
    public function allData(){
        return DB::table('kamar')
            ->join('pasien', 'pasien.id', '=', 'kamar.id_pasien')
            ->where('alamat','sidoarjo')
            ->get();
    }
}
