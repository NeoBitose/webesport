@section('title','Slider')

@extends('layouts.master')

@section('konten')

<div class="container">
  @if (session('pesan'))
      <div class="alert alert-white" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h3 class="m-0 font-weight-bold text-primary">Berhasil</h3><hr>
        <h4 class="mb-0 text-primary">{{session('pesan')}}</h4>
      </div>
  @endif

    <div class="card shadow mb-4 mt-5">
        <div class="card-header py-3">
            <h3 class="m-0 font-weight-bold text-primary">Data Slider</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive p-2">
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>No</th>
                            <th>Slide</th>
                            <th>gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($all as $row)
                              <tr>
                                <td>{{$nomer++}}</td>
                                <td>{{$row->nama}}</td>
                                <td class="text-center"><img src="{{url('/frontend/gambar/'.$row->image)}}" width="300"></td>
                                <td class="text-center">
                                  <a href="slider/edit/{{$row->id}}" class="btn btn-warning"><i class="fas fa-fw fa-edit"></i></a>
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@foreach ($all as $row)
    <!-- Modal -->
<div class="modal fade" id="hapus{{$row->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Perhatian.!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Apakah slide ingin di hapus
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <a href="/slider/hapus/{{$row->id}}" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection