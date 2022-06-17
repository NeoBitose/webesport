@section('title','Dashboard')

@extends('layouts.master')

@section('konten')
<br>
<div class="row">
    <div class="col-xl-4 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Event Tournament</h5>
              <span class="h2 font-weight-bold mb-0">{{$event}}</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-info text-white rounded-circle shadow">
                <i class="ni ni-calendar-grid-58"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <a href="/event"><span class="text-primary mr-2"><i class="fa fa-align-left"></i> Selengkapnya</span></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Blog esport</h5>
              <span class="h2 font-weight-bold mb-0">{{$blog}}</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-orange text-white rounded-circle shadow">
                <i class="ni ni-books"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <a href="/blog"><span class="text-primary mr-2"><i class="fa fa-align-left"></i> Selengkapnya</span></a>
          </p>
        </div>
      </div>
    </div>
    <div class="col-xl-4 col-md-6">
      <div class="card card-stats">
        <!-- Card body -->
        <div class="card-body">
          <div class="row">
            <div class="col">
              <h5 class="card-title text-uppercase text-muted mb-0">Sponsor</h5>
              <span class="h2 font-weight-bold mb-0">{{$sponsor}}</span>
            </div>
            <div class="col-auto">
              <div class="icon icon-shape bg-gradient-green text-white rounded-circle shadow">
                <i class="ni ni-briefcase-24"></i>
              </div>
            </div>
          </div>
          <p class="mt-3 mb-0 text-sm">
            <a href="/sponsor"><span class="text-primary mr-2"><i class="fa fa-align-left"></i> Selengkapnya</span></a>
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="card shadow mb-4 mt-3">
    <div class="card-header border-0">
        <div class="row align-items-center">
          <div class="col">
            <h3 class="mb-0">Slider Banner</h3>
          </div>
          <div class="col text-right">
            <a href="/slider" class="btn btn-lg btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>
    <div class="card-body">
        <div class="table-responsive p-2">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>No</th>
                        <th>Slide</th>
                        <th>gambar</th>
                    </tr>
                </thead>
                    <tbody>
                        @foreach ($slider as $row)
                          <tr>
                            <td>{{$nomer++}}</td>
                            <td>{{$row->nama}}</td>
                            <td class="text-center"><img src="{{url('/frontend/gambar/'.$row->image)}}" width="300"></td>                            
                          </tr>
                        @endforeach
                    </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
