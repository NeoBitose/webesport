@section('title','Event')

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
            <h3 class="m-0 font-weight-bold text-primary">Data Event Tournament</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive p-2">
                <a href="tournament/tambah" type="button" class="btn btn-success mb-3">Tambah</a>
                <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                    <thead>
                        <tr class="bg-primary text-white">
                            <th>No</th>
                            <th>Title Turnamen</th>                            
                            <th>Prize</th>
                            <th>Waktu Mulai</th>
                            <th>Slot</th>
                            <th>Tanggal Turnamen</th>
                            <th>Link Pendaftaran</th>
                            <th>Tanggal Pendaftaran</th>
                            <th>Info</th>
                            <th>Rules</th>
                            <th>gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                        <tbody>
                            @foreach ($event as $row)
                              <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$row->title}}</td>                                
                                <td>{{$row->price}}</td>
                                <td>{{$row->time}}</td>
                                <td>{{$row->slot}}</td>
                                <td>{{$row->date}}</td>                                
                                <td>{{$row->link}}</td>
                                <td>{{$row->tgl_daftar}}</td>
                                <td>{!!$row->info!!}</td>
                                <td>{!!$row->rules!!}</td>
                                <td class="text-center"><img src="{{url('/img-tournament/'.$row->image)}}" width="100" ></td>
                                <td class="text-center">
                                  <a href="/tournament/update/{{$row->id}}" type="button" class="btn m-1 btn-warning"><i class="fas fa-fw fa-user-edit"></i></a>
                                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$row->id}}">
                                    <i class="fas fa-fw fa-trash"></i>
                                  </button>                                
                                </td>
                              </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@foreach ($event as $row)
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
          Apakah event ingin di hapus
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
          <a href="/tournament/hapus/{{$row->id}}" class="btn btn-danger">Hapus</a>
        </div>
      </div>
    </div>
  </div>
@endforeach
@endsection