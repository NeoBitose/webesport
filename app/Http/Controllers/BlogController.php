<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogModel;

class BlogController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
        $this->BlogModel = new BlogModel;
        
    }
    public function index(){
        $data = [
            'blog' => $this->BlogModel->allData(),
        ];
        return view('blog.v_blog', $data);
    }

    public function tambah(){
        return view('blog.v_blogtambah');
    }

    public function simpan(){
        request()->validate([
            'title' =>  'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'required|mimes:jpg,jpeg,png'
        ]);

        $file = Request()->image;
        $nama_file = Request()->title.'.'.$file->extension();
        $file->move(public_path('img-blog'),$nama_file);
        
        $data = [
            'title' => Request()->title,
            'description' => Request()->description,
            'date' => Request()->date,
            'image' => $nama_file,
        ];

         $this->BlogModel->simpanData($data);

        return redirect()->route('blog')
        ->with('pesan','blog berhasil di tambahkan');
    }

    public function update($id){
        $data =[
            'show' => $this->BlogModel->first($id)
        ];
        return view('blog.v_blogedit',$data);
    }
    public function edit($id){
        request()->validate([
            'title' =>  'required',
            'description' => 'required',
            'date' => 'required',
            'image' => 'image|mimes:jpg,jpeg,png'
        ],[
            'title.required' =>  'harap diisi',
            'description.required' => 'harap diisi',
            'date.required' => 'harap diisi',
            'image.required' => 'harap diisi',
            'image.mimes' => 'ekstensi salah'
        ]);

        if(!Request()->image == ""){

            $data = $this->BlogModel->first($id);

            if(!$data->image == ""){
                unlink(public_path('img-blog/'.$data->image));
            }

            $file = Request()->image;
            $nama_file = Request()->title.'.'.$file->extension();
            $file->move(public_path('img-blog'),$nama_file);

            $data = [
                'title' => Request()->title,
                'description' => Request()->description,
                'date' => Request()->date,
                'image' => $nama_file,
            ];

        }else{
            $data = [
                'title' => Request()->title,
                'description' => Request()->description,
                'date' => Request()->date,
            ];
        }

        $this->BlogModel->editData($id,$data);

        return redirect()->route('blog')
        ->with('pesan','blog berhasil di edit');
    }

    public function hapus($id){

        $data = $this->BlogModel->first($id);

        if(!$data->image == ""){
            unlink(public_path('img-blog/'.$data->image));
        }

        $this->BlogModel->hapus($id);

        return redirect()->route('blog')
        ->with('pesan','blog berhasil di tambahkan');
    }
}
