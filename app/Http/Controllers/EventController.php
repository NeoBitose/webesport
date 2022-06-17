<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventModel;

class EventController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->EventModel = new EventModel;
        
    }
    public function index(){
        $data = [
            'event' => $this->EventModel->allData(),
        ];
        return view('tournament.v_tournament',$data);
    }

    public function tambah(){
        return view('tournament.v_tournamenttambah');
    }

    public function simpan(){
        request()->validate([
            'title' => 'required',
            'info' => 'required',
            'price' => 'required',
            'time' => 'required',
            'slot'  => 'required',
            'date' => 'required',
            'rules' => 'required',
            'tgl_daftar' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png,bmmp',
        ],[
            'title.required' => 'wajib diisi',
            'info.required' => 'wajib diisi',
            'price.required' => 'wajib diisi',
            'time.required' => 'wajib diisi',
            'slot.required' => 'wajib diisi',
            'date.required' => 'wajib diisi',
            'rules.required' => 'wajib diisi',
            'tgl_daftar' => 'wajib diisi',
            'image.required' => 'wajib diisi',
            'image.mimes' => 'eksensi salah'
        ]);

        $file = Request()->image;
        $nama_file = Request()->title.'.'.$file->extension();
        $file->move(public_path('img-tournament'),$nama_file);

        $data = [
            'title' => Request()->title,
            'info' => Request()->info,
            'price' => Request()->price,
            'time' => Request()->time,
            'slot'  => Request()->slot,
            'date' => Request()->date,
            'rules' => Request()->rules,
            'link' => Request()->link,
            'tgl_daftar' => Request()->tgl_daftar,
            'image' => $nama_file,
        ];

        $this->EventModel->simpanData($data);

        return redirect()->route('tournament')
        ->with('pesan','event tournament berhasil di tambahkan');
    }

    public function update($id){
        $data =[
            'show' => $this->EventModel->first($id)
        ];
        return view('tournament.v_tournamentedit',$data);
    }

    public function edit($id){
        request()->validate([
            'title' => 'required',
            'info' => 'required',
            'price' => 'required',
            'time' => 'required',
            'slot'  => 'required',
            'date' => 'required',
            'rules' => 'required',
            'tgl_daftar' => 'required',
            'image' => 'mimes:jpg,jpeg,png,bmmp',
        ],[
            'title.required' => 'wajib diisi',
            'info.required' => 'wajib diisi',
            'price.required' => 'wajib diisi',
            'time.required' => 'wajib diisi',
            'slot.required' => 'wajib diisi',
            'date.required' => 'wajib diisi',
            'rules.required' => 'wajib diisi',
            'tgl_daftar' => 'wajib diisi',
            'image.mimes' => 'eksensi salah'
        ]);

        if(!Request()->image == ""){

            $data = $this->EventModel->first($id);

            if(!$data->image == ""){
                unlink(public_path('img-tournament/'.$data->image));
            }

            $file = Request()->image;
            $nama_file = Request()->title.'.'.$file->extension();
            $file->move(public_path('img-tournament/'),$nama_file);

            $data = [
                'title' => Request()->title,
                'info' => Request()->info,
                'price' => Request()->price,
                'time' => Request()->time,
                'slot'  => Request()->slot,
                'date' => Request()->date,
                'rules' => Request()->rules,
                'link' => Request()->link,
                'tgl_daftar' => Request()->tgl_daftar,
                'image' => $nama_file,
            ];

        }else{
           $data = [
                'title' => Request()->title,
                'info' => Request()->info,
                'price' => Request()->price,
                'time' => Request()->time,
                'slot'  => Request()->slot,
                'date' => Request()->date,
                'rules' => Request()->rules,
                'link' => Request()->link,
                'tgl_daftar' => Request()->tgl_daftar,
            ];
        }

        $this->EventModel->editData($id,$data);

        return redirect()->route('tournament')
        ->with('pesan','Event berhasil di edit');
    }

    public function hapus($id){
        $data = $this->EventModel->first($id);

        if(!$data->image == ""){
            unlink(public_path('img-tournament/'.$data->image));
        }

        $this->EventModel->hapus($id);

        return redirect()->route('tournament')
        ->with('pesan','event tournament berhasil di hapus');
    }

}
