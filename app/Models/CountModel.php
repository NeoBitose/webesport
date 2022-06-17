<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class CountModel extends Model
{
    protected $table = 'countdown';
    
    public function allData(){

        return DB::table('countdown')->get();
        
    }

    public function first($id){
        return DB::table('countdown')->where('id', $id)->first();
    }

    public function editData($id,$data){
        DB::table('countdown')
              ->where('id', $id)
              ->update($data);
    }

}
