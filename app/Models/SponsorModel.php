<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SponsorModel extends Model
{
    protected $table = 'sponsor';
    public function allData(){
        return DB::table('sponsor')->get();
    }

    public function simpanData($data){
        DB::table('sponsor')->insert($data);
    }

    public function first($id){
        return DB::table('sponsor')->where('id', $id)->first();
    }

    public function hapus($id){
        DB::table('sponsor')
        ->where('id', '=', $id )
        ->delete();
    }

    public function editData($id,$data){
        DB::table('sponsor')
              ->where('id', $id)
              ->update($data);
    }
}
