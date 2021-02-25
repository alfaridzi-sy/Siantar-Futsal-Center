@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Lapangan Futsal
@endsection

@section('page_header')
    Tambah Data Master Lapangan Futsal
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Tambah Data Master Lapangan Futsal
@endsection

@section('content')
    <div class="card-body">
        <form class="forms-sample" method="POST" action="{{ route('lapangan.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="id_futsal">Nama Futsal</label>
                <select class="form-control" id="id_futsal" name="id_futsal">
                    @foreach($futsals as $f)
                <option value="{{ $f -> id_futsal }}">{{ $f -> nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama">Nama Lapangan</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lapangan">
            </div>
            <div class="form-group">
                <label for="jenis_lantai">Jenis Lantai</label>
                <input type="text" class="form-control" id="jenis_lantai" name="jenis_lantai" placeholder="Jenis Lantai">
            </div>
            <div class="form-group">
                <label for="harga_pagi">Harga Pagi</label>
                <input type="number" class="form-control" id="harga_pagi" name="harga_pagi" placeholder="Harga Pagi">
            </div>
            <div class="form-group">
                <label for="harga_malam">Harga Malam</label>
                <input type="number" class="form-control" id="harga_malam" name="harga_malam" placeholder="Harga Malam">
            </div>
            <div class="form-group">
                <label for="foto1">Foto Lapangan</label>
                <input type="file" name="foto1" class="form-control">
            </div>
            <div class="form-group">
                <label for="foto2">Foto Lapangan</label>
                <input type="file" name="foto2" class="form-control">
            </div>
            <div class="form-group">
                <label for="foto3">Foto Lapangan</label>
                <input type="file" name="foto3" class="form-control">
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Add</button>
            <a class="btn btn-light" href="/lapangan" role="button">Cancel</a>
        </form>
    </div>
@endsection

