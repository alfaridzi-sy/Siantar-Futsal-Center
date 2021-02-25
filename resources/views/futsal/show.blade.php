
@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Futsal
@endsection

@section('page_header')
    Detail Data Master Futsal
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Detail Data Master Futsal
@endsection

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Detail Futsal</h2>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <tr>
                    <td>Nama Futsal</td>
                    <td></td>
                    <td>{{$futsals -> nama}}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td></td>
                    <td>{{$futsals -> alamat}}</td>
                </tr>
                <tr>
                    <td>Telepon</td>
                    <td></td>
                    <td>{{$futsals -> telepon}}</td>
                </tr>
                <tr>
                    <td>Garis Lintang</td>
                    <td></td>
                    <td>{{$futsals -> lat}}</td>
                </tr>
                <tr>
                    <td>Garis Bujur</td>
                    <td></td>
                    <td>{{$futsals -> long}}</td>
                </tr>
                <tr>
                    <td>Nama Admin</td>
                    <td></td>
                    <td>{{$futsals -> admin}}</td>
                </tr>
                <tr>
                    <td>Jam Buka</td>
                    <td></td>
                    <td>{{$futsals -> jam_buka}}</td>
                </tr>
                <tr>
                    <td>Jam Tutup</td>
                    <td></td>
                    <td>{{$futsals -> jam_tutup}}</td>
                </tr>
                <tr>
                    <td>Administrator</td>
                    <td></td>
                    <td>{{$futsals -> user -> name}}</td>
                </tr>
                <tr>
                    <td colspan="3">
                        <img src="/storage/futsal/{{ $futsals -> foto }}" class="img-rounded" style="width: 350px; height:350px" >
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/futsal" role="button">Back</a>
@endsection
