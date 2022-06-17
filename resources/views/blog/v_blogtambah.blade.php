@section('title','Tambah Blog')

@extends('layouts.master')

@section('konten')
<div class="container-fluid mt-5">
    <!-- Table -->
    <div class="row">
        <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header">
            <h3 class="mb-0 text-primary">Tambah Blog</h3>
                </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card-body">
                                <form action="/blog/simpan" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Title</label>
                                        <input class="form-control" type="text" name="title">
                                        @error('title')
                                            <h4 class="text-danger">{{$message}}</h4>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Description</label>
                                        <input class="form-control" type="text" name="description">
                                        @error('description')
                                            <h4 class="text-danger">{{$message}}</h4>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Date</label>
                                        <input class="form-control" type="date" name="date">
                                        @error('date')
                                            <h4 class="text-danger">{{$message}}</h4>
                                        @enderror
                                    </div>
          
                                    <div class="form-group">
                                        <label class="form-control-label">Image</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="image">
                                            <label class="custom-file-label" for="customFileLang"></label>
                                        </div>
                                        @error('image')
                                            <h4 class="text-danger">{{$message}}</h4>
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