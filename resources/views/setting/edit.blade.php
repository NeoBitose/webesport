@section('title','Tambah Slider')

@extends('layouts.master')

@section('konten')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0 text-primary">Edit Setting</h3>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card-body">
                <form action="/setting/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label">Judul</label>
                                <input class="form-control" type="text" name="judul" value="{{ $data->judul }}">
                                @error('judul') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label">Penyelenggara</label>
                                <input class="form-control" type="text" name="penyelenggara"  value="{{ $data->penyelenggara }}">
                                @error('penyelenggara') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label">Deskripsi</label>
                                <input class="form-control" type="text" name="deskripsi" value="{{ $data->deskripsi }}">
                                @error('deskripsi') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label">Lomba</label>
                                <input class="form-control" type="text" name="jenis_lomba" value="{{ $data->jenis_lomba }}">
                                @error('jenis_lomba') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label">Logo Esport</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="logo_esport">
                                    <label class="custom-file-label" for="customFileLang"></label>
                                </div>
                                @error('logo_esport')
                                    <h4 class="text-danger">{{ $message }}</h4>
                                @enderror
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label class="form-control-label">Logo Sekolah</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="logo_sekolah">
                                    <label class="custom-file-label" for="customFileLang"></label>
                                </div>
                                @error('logo_sekolah')
                                    <h4 class="text-danger">{{ $message }}</h4>
                                @enderror
                            </div>
                        </div>
                    </div>                   
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary">Edit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
