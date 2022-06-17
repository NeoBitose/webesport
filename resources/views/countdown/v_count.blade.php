@section('title','Countdown')

@extends('layouts.master')

@section('konten')    

        @if(session('pesan'))
            <div class="alert alert-white" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h3 class="m-0 font-weight-bold text-primary">Berhasil</h3>
                <hr>
                <h4 class="mb-0 text-primary">{{ session('pesan') }}</h4>
            </div>
        @endif

        <div class="card shadow mb-4 mt-5">
            <div class="card-header py-3">
                <h3 class="m-0 font-weight-bold text-primary">Waktu</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive p-2">
                    <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                        <thead>
                            <tr class="bg-primary text-white">
                                <th>No</th>
                                <th>Nama</th>
                                <th>time</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($all as $row)
                                <td>1</td>
                                <td>Finish time</td>
                                <td>{{ $row->tanggal }} - {{ $row->bulan }} - {{ $row->tahun }} ---
                                    {{ $row->jam }} </td>
                                <td class="text-center">
                                    <a href="count/edit/{{ $row->id }}" class="btn btn-warning"><i
                                            class="fas fa-fw fa-edit"></i></a>
                                </td>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
