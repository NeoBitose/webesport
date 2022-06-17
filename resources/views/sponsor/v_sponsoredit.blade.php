@section('title','Edit Sponsor')

@extends('layouts.master')

@section('konten')
<div class="card">
    <!-- Card header -->
    <div class="card-header">
        <h3 class="mb-0 text-primary">Edit Sponsor</h3>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card-body">
                <form action="/sponsor/edit/{{ $show->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="form-control-label">Nama</label>
                        <input class="form-control" type="text" name="nama" value="{{ $show->name }}">
                        @error('nama')
                            <h4 class="text-danger">{{ $message }}</h4>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-control-label">Foto</label><br>
                        <img src="{{ url('img-sponsor/'.$show->logo) }}" width="200">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Ganti foto</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="logo">
                            <label class="custom-file-label" for="customFileLang"></label>
                        </div>
                        @error('logo')
                            <h4 class="text-danger">{{ $message }}</h4>
                        @enderror
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
