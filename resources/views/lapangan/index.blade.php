@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Lapangan Futsal
@endsection

@section('page_header')
    Data Master Lapangan Futsal
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Data Master Lapangan Futsal
@endsection

@section('content')
    <div class="card-body">
        <div style="margin: 10px">
            <a class="btn btn-primary btn-sm" href="{{route('lapangan.create')}}" role="button">Tambah Data Lapangan Futsal</a>
        </div>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr class="text-center">
                    <th> No </th>
                    <th> Nama Futsal </th>
                    <th> Nama Lapangan </th>
                    <th> Jenis Lantai </th>
                    <th> Harga Pagi </th>
                    <th> Harga Malam </th>
                    <th colspan="3"> Foto Lapangan </th>
                    <th colspan="3"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($lapangans as $k => $l)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $l -> futsal -> nama }}</td>
                    <td>{{ $l -> nama }}</td>
                    <td>{{ $l -> jenis_lantai }}</td>
                    <td>Rp. {{ $l -> harga_pagi }},-</td>
                    <td>Rp. {{ $l -> harga_malam }},-</td>
                    <td>
                        <img src="/storage/lapangan/{{ $l -> foto1 }}" class="img-rounded" style="width: 100px; height:100px" >
                    </td>
                    <td>
                        <img src="/storage/lapangan/{{ $l -> foto2 }}" class="img-rounded" style="width: 100px; height:100px" >
                    </td>
                    <td>
                        <img src="/storage/lapangan/{{ $l -> foto3 }}" class="img-rounded" style="width: 100px; height:100px" >
                    </td>
                    <td><a class="btn btn-sm btn-success" href="{{route('lapangan.show', ['lapangan' => $l->id_lapangan])}}" role="button"><i class="mdi mdi-eye"></i> </a></td>
                    <td><a class="btn btn-sm btn-warning" href="{{route('lapangan.edit', ['lapangan' => $l->id_lapangan])}}" role="button"><i class="mdi mdi-pencil"></a></td>
                    <td>
                        <form action="{{route('lapangan.destroy', ['lapangan' => $l->id_lapangan])}}"
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
