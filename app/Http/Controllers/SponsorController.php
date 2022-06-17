<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SponsorModel;

class SponsorController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->SponsorModel = new SponsorModel;
        
    }
    public function index(){
        $data = [ 
            'all' => $this->SponsorModel->allData(),
            'nomer' => $no = 1
        ];
        return view('sponsor.v_sponsor',$data);
    }

    public function tambah(){
        return view('sponsor.v_sponsortambah');
    }

    public function simpan(){
        request()->validate([
            'nama' => 'required',
            'logo' => 'required','mimes:jpg,jpeg,png',
        ],[
            'logo.required' => 'Logo wajib diisi',
            'logo.mimes' => 'Logo support jpg,jpeg,png',
            'nama.required' => 'Nama wajib diisi',
        ]);

        $file = Request()->logo;
        $nama_file = Request()->nama.'.'.$file->extension();
        $file->move(public_path('img-sponsor'),$nama_file);

        $data = [
            'logo' => $nama_file,
            'name' => Request()->nama,
        ];

        $this->SponsorModel->simpanData($data);

        return redirect()->route('sponsor')
        ->with('pesan','Sponsor berhasil di tambahkan');
    }

    public function hapus($id){

        $data = $this->SponsorModel->first($id);

        if(!$data->logo == ""){
            unlink(public_path('img-sponsor/'.$data->logo));
        }

        $this->SponsorModel->hapus($id);

        return redirect()->route('sponsor')
        ->with('pesan','Sponsor berhasil di tambahkan');
    }

    public function update($id){
        $data =[
            'show' => $this->SponsorModel->first($id)
        ];
        return view('sponsor.v_sponsoredit',$data);
    }

    public function edit($id){
        request()->validate([
            'nama' => 'required',
            'logo' => 'mimes:jpg,jpeg,png',
        ],[
            'logo.mimes' => 'Logo support jpg,jpeg,png',
            'nama.required' => 'Nama wajib diisi',
        ]);

        if(!Request()->logo == ""){

            $data = $this->SponsorModel->first($id);

            if(!$data->logo == ""){
                unlink(public_path('img-sponsor/'.$data->logo));
            }

            $file = Request()->logo;
            $nama_file = Request()->nama.'.'.$file->extension();
            $file->move(public_path('img-sponsor'),$nama_file);

            $data = [
                'logo' => $nama_file,
                'name' => Request()->nama,
            ];

        }else{
            $data = [
                'name' => Request()->nama,
            ];
        }

        $this->SponsorModel->editData($id,$data);

        return redirect()->route('sponsor')
        ->with('pesan','Sponsor berhasil di edit');
    }
}
