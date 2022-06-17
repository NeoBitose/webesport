<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SliderModel extends Model
{
    protected $table = 'slider';
    
    public function allData(){

        return DB::table('slider')->get();
        
    }

    public function first($id){
        return DB::table('slider')->where('id', $id)->first();
    }

    public function editData($id,$data){
        DB::table('slider')
              ->where('id', $id)
              ->update($data);
    }
}
