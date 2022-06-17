@section('title','Edit Waktu')

@extends('layouts.master')

@section('konten')
<div class="container-fluid mt-5">
    <!-- Table -->
    <div class="row">
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header">
                    <h3 class="mb-0 text-primary">Edit Waktu</h3>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-body">
                            <form action="/count/simpan/{{ $show->id }}" method="post">
                                @csrf

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Tanggal</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1"
                                                value="{{ $show->tanggal }}" name="tanggal">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Tahun</label>
                                            <input type="year" class="form-control" id="exampleFormControlInput1"
                                                value="{{ $show->tahun }}" name="tahun">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Bulan</label>
                                            <select class="form-control" id="inputGroupSelect01" name="bulan">
                                                <option value="{{ $show->bulan }}">
                                                    @if(($show->bulan)=='jan')
                                                        Januari
                                                    @endif

                                                    @if(($show->bulan)=='feb')
                                                        Februari
                                                    @endif

                                                    @if(($show->bulan)=='mar')
                                                        Maret
                                                    @endif

                                                    @if(($show->bulan)=='apr')
                                                        Apri
                                                    @endif

                                                    @if(($show->bulan)=='mei')
                                                        Mei
                                                    @endif

                                                    @if(($show->bulan)=='jun')
                                                        Juni
                                                    @endif

                                                    @if(($show->bulan)=='jul')
                                                        Juli
                                                    @endif

                                                    @if(($show->bulan)=='aug')
                                                        Agustus
                                                    @endif

                                                    @if(($show->bulan)=='sep')
                                                        September
                                                    @endif

                                                    @if(($show->bulan)=='okt')
                                                        Oktober
                                                    @endif

                                                    @if(($show->bulan)=='nov')
                                                        November
                                                    @endif

                                                    @if(($show->bulan)=='des')
                                                        Desember
                                                    @endif                                                    
                                                </option>
                                                <option value="jan">Januari</option>
                                                <option value="feb">Februari</option>
                                                <option value="mar">Maret</option>
                                                <option value="apr">April</option>
                                                <option value="mei">Mei</option>
                                                <option value="jun">Juni</option>
                                                <option value="jul">Juli</option>
                                                <option value="aug">Agustus</option>
                                                <option value="sep">September</option>
                                                <option value="okt">Oktober</option>
                                                <option value="nov">November</option>
                                                <option value="des">Desember</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label class="form-control-label">Jam</label>
                                                <input class="form-control" type="time" name="waktu"
                                                    value="{{ $show->jam }}">
                                            </div>
                                        </div>
                                    </div>

                                    {{-- waktu,bulan,tanggal,tahun --}}
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
