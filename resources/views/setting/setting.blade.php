@section('title','Dashboard')

@extends('layouts.master')

@section('konten')
<div class="card shadow mb-4 mt-3">
    <div class="card-header border-0">
        <div class="row align-items-center">
            <div class="col">
                <h3 class="mb-0"></h3>
            </div>
            <div class="col text-right">
                @foreach($setting as $row)
                    <a href="/setting/edit/{{$row->id}}" class="btn btn-md btn-primary">Edit Setting</a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="card-body">
        <div>
            <div class="col">
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-left">
                            <h3>Judul</h3>
                        </div>
                        <div class="col-1">
                            :
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{ $row->judul }}</p>
                        </div>                    
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-left">
                            <h3>Penyelenggara</h3>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{ $row->penyelenggara }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-left">
                            <h3>Deskripsi</h3>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{ $row->deskripsi }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-left">
                            <h3>Lomba</h3>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p>{{ $row->jenis_lomba }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-left">
                            <h3>Logo Esport</h3>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ url('/logo/'.$row->logo_esport) }}" width="100">
                        </div>
                    </div>
                </div><br>
                <div class="col-12">
                    <div class="row">
                        <div class="col-3 text-left">
                            <h3>Logo Sekolah</h3>
                        </div>
                        <div class="col-1">
                            :
                        </div>
                    </div><br>
                    <div class="row">
                        <div class="col-12">
                            <img src="{{ url('/logo/'.$row->logo_sekolah) }}" width="100">
                        </div>
                    </div>
                </div><br>
            </div>
        </div>
        <!-- <div class=" p-2">
            <table class="table" width="100%">                
                <tbody>
                    @foreach($setting as $row)  
                        <tr>
                            <th>
                                <h4> Judul</h4>
                            </th>
                            <td>:</td> 
                        </tr>
                        <tr>
                            <td>{{ $row->judul }}</td>
                        </tr>
                        <tr>
                            <th>Penyelenggara</th>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>{{ $row->penyelenggara }}</td>
                        </tr>
                        <tr>
                            <th>Deskripsi</th>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>{{ $row->deskripsi }}</td>
                        </tr>
                        <tr>
                            <th>Lomba</th>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td>{{ $row->jenis_lomba }}</td>
                        </tr>
                        <tr>
                            <th>Logo Esport</th>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td><img src="{{ url('/logo/'.$row->logo_esport) }}" width="100"></td>
                        </tr>
                        <tr>
                            <th>Logo Sekolah</th>
                            <td>:</td>
                        </tr>
                        <tr>
                            <td><img src="{{ url('/logo/'.$row->logo_sekolah) }}" width="100">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> -->
    </div>
</div>
@endsection
