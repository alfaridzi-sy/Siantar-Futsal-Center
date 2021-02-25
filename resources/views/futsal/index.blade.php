@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Futsal
@endsection

@section('page_header')
    Data Master Futsal
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Data Master Futsal
@endsection

@section('content')
    <div class="card-body">
        <div style="margin: 10px">
            <a class="btn btn-primary btn-sm" href="{{route('futsal.create')}}" role="button">Tambah Data Futsal</a>
        </div>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr class="text-center">
                    <th> No </th>
                    <th> Nama Futsal </th>
                    <th> Alamat </th>
                    <th> Telepon </th>
                    <th> Garis Lintang </th>
                    <th> Garis Bujur </th>
                    <th> Nama Admin </th>
                    <th> Jam Buka </th>
                    <th> Jam Tutup </th>
                    <th> Fasilitas </th>
                    <th> Foto </th>
                    <th> Administrator </th>
                    <th colspan="3"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($futsals as $k => $f)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $f -> nama }}</td>
                    <td>{{ $f -> alamat }}</td>
                    <td>{{ $f -> telepon }}</td>
                    <td>{{ $f -> lat }}</td>
                    <td>{{ $f -> long }}</td>
                    <td>{{ $f -> admin }}</td>
                    <td>{{ $f -> jam_buka }}</td>
                    <td>{{ $f -> jam_tutup }}</td>
                    <td>{!! $f -> fasilitas !!}</td>
                    <td>
                        <img src="/storage/futsal/{{ $f -> foto }}" class="img-rounded" style="width: 100px; height:100px" >
                    </td>
                    <td>{{ $f -> user -> name }}</td>
                    <td><a class="btn btn-sm btn-success" href="{{route('futsal.show', ['futsal' => $f->id_futsal])}}" role="button"><i class="mdi mdi-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('futsal.edit', ['futsal' => $f->id_futsal])}}" role="button"><i class="mdi mdi-pencil"></a></td>
                    <td>
                        <form action="{{route('futsal.destroy', ['futsal' => $f->id_futsal])}}"
                            method="POST" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" value="Delete">
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
