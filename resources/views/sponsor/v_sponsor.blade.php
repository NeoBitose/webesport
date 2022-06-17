@section('title','sponsor')

@extends('layouts.master')

@section('konten')
<div class="container">
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
            <h3 class="m-0 font-weight-bold text-primary">Data Sponsor</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive p-2">
                <a href="/sponsor/tambah" type="button" class="btn btn-success mb-3">Tambah</a>
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>No</th>
                            <th>Nama</th>
                            <th>Logo</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($all as $row)
                                <tr>
                                    <td>{{$nomer++}}</td>
                                    <td>{{$row->name}}</td>
                                    <td><img src="{{url('img-sponsor/'.$row->logo)}}" width="100"></td>
                                    <td class="text-center">
                                        <a href="/sponsor/update/{{$row->id}}" type="button" class="btn m-1 btn-warning"><i class="fas fa-fw fa-user-edit"></i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$row->id}}">
                                            <i class="fas fa-fw fa-trash"></i>
                                        </button></td>
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
          Apakah sponsor {{$row->name}} ingin di hapus
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <a href="/sponsor/hapus/{{$row->id}}" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection