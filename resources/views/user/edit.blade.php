@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Admin
@endsection

@section('page_header')
    Edit Data Master Admin
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Edit Data Master Admin
@endsection

@section('content')
    <div class="card-body">
        <form class="forms-sample" method="POST" action="{{route('user.update', ['user' => $users -> id])}}">
            @csrf
            {{method_field('PUT')}}
            <div class="form-group">
                <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Nama" value="{{$users -> name}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{$users -> email}}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="">
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
            <a class="btn btn-light" href="/user" role="button">Cancel</a>
        </form>
    </div>
@endsection
