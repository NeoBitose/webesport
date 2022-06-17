<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SliderModel;

class SliderController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->SliderModel = new SliderModel;

    }
    public function index(){
        $data = [
            'nomer' =>  1 ,
            'all' => $this->SliderModel->allData()
        ];
        return view('slider.v_slider',$data);
    }

    public function edit($id){
        $data =[
            'show' => $this->SliderModel->first($id)
        ];
        return view('slider.v_slideredit',$data);
    }

    public function simpan($id){
        request()->validate([
            'image' => 'mimes:jpg',
        ],[
            'logo.mimes' => 'Logo support jpg',
        ]);

        if(!Request()->image == ""){

            $file = Request()->image;
            $nama_file = Request()->slider.'.'.$file->extension();
            $file->move(public_path('/frontend/gambar/'),$nama_file);

            $data = [
                'image' => $nama_file,
            ];

            $this->SliderModel->editData($id,$data);

            return redirect()->route('slider')
            ->with('pesan','Sponsor berhasil di edit');

        }else{

            return redirect()->route('slider');

        }

    }
}
