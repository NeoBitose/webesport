@section('title','Tambah Slider')

@extends('layouts.master')

@section('konten')

<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0 text-primary">Edit Slider</h3>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                <form action="/slider/simpan/{{ $show->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="form-group">
                            <label class="form-control-label">Slide</label>
                            <input class="form-control" type="text" name="slider" value="{{ $show->nama }}" readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-control-label">Foto</label><br>
                                <img src="{{ url('/frontend/gambar/'.$show->image) }}"
                                    width="300">
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Ganti Foto</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="customFileLang" lang="en"
                                            name="image">
                                        <label class="custom-file-label" for="customFileLang"></label>
                                    </div>
                                    @error('image')
                                        <h4 class="text-danger">{{ $message }}</h4>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
