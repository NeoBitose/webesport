@section('title','Edit Sponsor')

@extends('layouts.master')

@section('konten')
<div class="container-fluid mt-5">
  <!-- Table -->
  <div class="row">
    <div class="col">
      <div class="card">
        <!-- Card header -->
        <div class="card-header">
          <h3 class="mb-0 text-primary">Edit Event</h3>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card-body">
              <form action="/tournament/edit/{{$show->id}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Title Turnamen</label>
                      <input class="form-control" type="text" name="title" value='{{$show->title}}'>
                      @error('title')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Prize</label>
                      <input class="form-control" type="text" name="price" value='{{$show->price}}'>
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
                      <input class="form-control" type="text" name="time" value='{{$show->time}}'>
                      @error('time')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Slot</label>
                      <input class="form-control" type="text" name="slot" value='{{$show->slot}}'>
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
                      <input class="form-control" type="text" name="date" value='{{$show->date}}'>
                      @error('date')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div> 
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Link Pendaftaran</label>
                      <input class="form-control" type="text" name="link" value='{{$show->link}}'>
                      @error('link')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>  
                  </div>                          
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Image</label>
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileLang" lang="en" name="image" value='{{$show->image}}'>
                        <label class="custom-file-label" for="customFileLang"></label>
                      </div>
                      @error('image')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label class="form-control-label">Tanggal Pendaftaran</label>
                      <input class="form-control" type="text" name="tgl_daftar" value='{{$show->tgl_daftar}}'>
                      @error('tgl_daftar')
                      <h4 class="text-danger">{{$message}}</h4>
                      @enderror
                    </div>
                  </div>                            
                </div>
                
                <div class="form-group">
                  <label class="form-control-label">Info</label>
                  <textarea class="ckeditor form-control" id="ckeditor" name="info" value='{{$show->info}}'>{{$show->info}}</textarea>
                  @error('info')
                  <h4 class="text-danger">{{$message}}</h4>
                  @enderror
                </div>

                <div class="form-group">
                  <label class="form-control-label">Rules</label>
                  <textarea class="ckeditor form-control" id="ckeditor" type="text" name="rules" value='{{$show->rules}}'>{{$show->rules}}</textarea>
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