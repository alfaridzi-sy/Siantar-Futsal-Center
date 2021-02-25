
@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Lapangan Futsal
@endsection

@section('page_header')
    Detail Data Master Lapangan Futsal
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Detail Data Master Lapangan Futsal
@endsection

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Detail Lapangan Futsal</h2>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <tr>
                    <td>Nama Futsal</td>
                    <td></td>
                    <td>{{$lapangans -> futsal -> nama}}</td>
                </tr>
                <tr>
                    <td>Nama Lapangan</td>
                    <td></td>
                    <td>{{$lapangans -> nama}}</td>
                </tr>
                <tr>
                    <td>Jenis Lantai</td>
                    <td></td>
                    <td>{{$lapangans -> jenis_lantai}}</td>
                </tr>
                <tr>
                    <td>Harga Pagi</td>
                    <td></td>
                    <td>{{$lapangans -> harga_pagi}}</td>
                </tr>
                <tr>
                    <td>Harga Malam</td>
                    <td></td>
                    <td>{{$lapangans -> harga_malam}}</td>
                </tr>
                <tr>
                    <td>
                        <img src="/storage/lapangan/{{ $lapangans -> foto1 }}" class="img-rounded" style="width: 250px; height:250px" >
                    </td>
                    <td>
                        <img src="/storage/lapangan/{{ $lapangans -> foto2 }}" class="img-rounded" style="width: 250px; height:250px" >
                    </td>
                    <td>
                        <img src="/storage/lapangan/{{ $lapangans -> foto3 }}" class="img-rounded" style="width: 250px; height:250px" >
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/futsal" role="button">Back</a>
@endsection
