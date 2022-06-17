<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountModel;

class CountController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->CountModel = new CountModel;

    }
    public function index(){
        
        $data = [
            'nomer' =>  1 ,
            'all' => $this->CountModel->allData()
        ];
        return view('countdown.v_count',$data);
    }

    public function edit($id){
        $data =[
            'show' => $this->CountModel->first($id)
        ];
        return view('countdown.v_countedit',$data);
    }

    public function simpan($id){
        
            // {{-- waktu,bulan,tanggal,tahun --}}
            
            $data = [
                'bulan' => Request()->bulan,
                'tanggal' => Request()->tanggal,
                'tahun' => Request()->tahun,
                'jam' => Request()->waktu,
            ];

            $this->CountModel->editData($id,$data);

            return redirect()->route('count')
            ->with('pesan','Waktu berhasil di edit');

    }

}
