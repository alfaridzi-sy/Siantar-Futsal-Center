@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Admin
@endsection

@section('page_header')
    Data Master Admin
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Data Master Admin
@endsection

@section('content')
    <div class="card-body">
        <div style="margin: 10px">
            <a class="btn btn-primary btn-sm" href="{{route('user.create')}}" role="button">Tambah Data Admin</a>
        </div>
        <table class="table table-responsive table-bordered">
            <thead>
                <tr class="text-center">
                    <th> No </th>
                    <th> Nama </th>
                    <th> Email </th>
                    <th> Password </th>
                    <th colspan="3"> Action </th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $k => $u)
                <tr class="text-center">
                    <td>{{ $k + 1 }}</td>
                    <td>{{ $u -> name }}</td>
                    <td>{{ $u -> email }}</td>
                    <td>{{ $u -> password }}</td>
                    <td>
                        <a class="btn btn-sm btn-success" href="{{route('user.show', ['user' => $u->id])}}" role="button"><i class="mdi mdi-eye"></i></a>
                    </td>
                    <td>
                        <a class="btn btn-sm btn-warning" href="{{route('user.edit', ['user' => $u->id])}}" role="button"><i class="mdi mdi-pencil"></i></a>
                    </td>
                    <td>
                        <form action="{{route('user.destroy', ['user' => $u->id])}}"
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
