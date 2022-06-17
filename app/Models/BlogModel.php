<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogModel extends Model
{
    use HasFactory;

    protected $table = 'blog';
    protected $guarded = ['id'];
    public $timestamps = false; 

    public function allData(){
        return DB::table('blog')->get();
    }

    public function simpanData($data){
        DB::table('blog')->insert($data);
    }

    public function first($id){
        return DB::table('blog')->where('id', $id)->first();
    }

    public function hapus($id){
        DB::table('blog')->where('id', $id)->delete();
    }

    public function editData($id, $data){
        DB::table('blog')->where('id', $id)->update($data);
    }
}
