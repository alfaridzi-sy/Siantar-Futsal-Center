
@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Admin
@endsection

@section('page_header')
    Detail Data Master Admin
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Detail Data Master Admin
@endsection

@section('content')
    <div class="card">
        <div class="card-header text-center">
            <h2>Detail Admin</h2>
        </div>
        <div class="card-body">
            <table class="table text-center">
                <tr>
                    <td>Nama</td>
                    <td></td>
                    <td>{{$users -> name}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td></td>
                    <td>{{$users -> email}}</td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td></td>
                    <td>{{$users -> password}}</td>
                </tr>
            </table>
        </div>
    </div>
    <a class="btn btn-danger" href="/user" role="button">Back</a>
@endsection
