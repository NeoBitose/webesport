<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SettingModel;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Str;

class SettingController extends Controller
{
    public function __construct(){

    $this->middleware('auth');    

    }

    public function index(){

        $data = [            
            'setting' => SettingModel::all(),
        ];

        return view('setting.setting', $data);
    }

    public function edit($id){
        return view('setting.edit', [
            'data' => SettingModel::where('id','=',$id)->first()
        ]);
    }

    public function update($id){

        request()->validate([
            'judul' => 'required',
            'penyelenggara' => 'required',
            'deskripsi' => 'required',
            'jenis_lomba' => 'required',
            'logo_esport' => 'mimes:jpg,jpeg,png,bmp,svg',
            'logo_sekolah' => 'mimes:jpg,jpeg,png,bmp,svg',
        ]);

        if (!Request()->logo_esport && !Request()->logo_sekolah) {
            $data = [
                'judul' => Request()->judul,
                'penyelenggara' => Request()->penyelenggara,
                'deskripsi' => Request()->deskripsi,
                'jenis_lomba' => Request()->jenis_lomba,                
            ];

            SettingModel::where('id',$id)->update($data);
        }

        else {

            $setting = SettingModel::where('id',$id)->first();

            if(!Request()->logo_esport == ""){
                unlink(public_path('logo/'. $setting->logo_esport));
            }
            if(!Request()->logo_sekolah == ""){
                unlink(public_path('logo/'. $setting->logo_sekolah));
            }

            if(Request()->logo_esport){

                $file_esport = Request()->logo_esport;
                $file_esport_name = Str::random(10).'.'.$file_esport->extension();
                $file_esport->move(public_path('logo'),$file_esport_name);

                $data = [                    
                    'logo_esport' => $file_esport_name,                    
                ];

                SettingModel::where('id',$id)->update($data);
            }

            if(Request()->logo_sekolah){

                $file_sekolah = Request()->logo_sekolah;
                $file_sekolah_name = Str::random(10).'.'.$file_sekolah->extension();
                $file_sekolah->move(public_path('logo'),$file_sekolah_name);

                $data = [                                        
                    'logo_sekolah' => $file_sekolah_name
                ];

                SettingModel::where('id',$id)->update($data);
            }      
            
            $data = [
                'judul' => Request()->judul,
                'penyelenggara' => Request()->penyelenggara,
                'deskripsi' => Request()->deskripsi,
                'jenis_lomba' => Request()->jenis_lomba,
            ];

            SettingModel::where('id',$id)->update($data);
        }

        return redirect()->route('setting')->with('message', 'Data berhasil diubah');
    }
}
