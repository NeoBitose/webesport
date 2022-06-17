<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class EventModel extends Model
{
    use HasFactory;

    protected $table = 'event';

    public function allData(){
        return DB::table('event')->get();
    }

    public function simpanData($data){
        DB::table('event')->insert($data);
    }

    public function first($id){
        return DB::table('event')->where('id', $id)->first();
    }

    public function hapus($id){
            DB::table('event')->where('id', $id)->delete();
    }

    public function editData($id, $data){
        DB::table('event')->where('id', $id)->update($data);
    }

}
