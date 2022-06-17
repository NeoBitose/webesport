@section('title','Tambah Sponsor')

@extends('layouts.master')

@section('konten')
<div class="container-fluid mt-5">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0 text-primary">Tambah Event</h3>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card-body">
              <form action="/tournament/simpan" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Title Turnamen</label>
                      <input class="form-control" type="text" name="title">
                      @error('title')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Prize</label>
                      <input class="form-control" type="text" name="price">
                      @error('price')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>                          
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Waktu Mulai</label>
                      <input class="form-control" type="text" name="time">
                      @error('time')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Slot</label>
                      <input class="form-control" type="text" name="slot">
                      @error('slot')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>                          
                </div>     

                <div class="row">
                  <div class="col-sm-6">
                   <div class="form-group">
                    <label class="form-control-label">Tanggal Turnamen</label>
                    <input class="form-control" type="text" name="date">
                    @error('date')
                    <h4 class="text-danger">{{$message}}</h4>
                    @enderror
                  </div>              
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-control-label">Link Pendaftaran</label>
                    <input class="form-control" type="text" name="link">
                    @error('link')
                    <h4 class="text-danger">{{$message}}</h4>
                    @enderror
                  </div>
                </div>                          
              </div>    

              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="form-control-label">Tanggal Pendaftaran</label>
                    <input class="form-control" type="text" name="tgl_daftar">
                    @error('tgl_daftar')
                    <h4 class="text-danger">{{$message}}</h4>
                    @enderror
                  </div>  
                </div>
                <div class="col-sm-6">
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
                </div>                          
              </div>                                     

              <div class="form-group">
                <label class="form-control-label">Info</label>
                <textarea class="form-control ckeditor" id="ckeditor" type="text" name="info"></textarea>
                @error('info')
                <h4 class="text-danger">{{$message}}</h4>
                @enderror
              </div>

              <div class="form-group">
                <label class="form-control-label">Rules</label>
                <textarea class="form-control ckeditor" id="ckeditor" type="text" name="rules"></textarea>
                @error('rules')
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