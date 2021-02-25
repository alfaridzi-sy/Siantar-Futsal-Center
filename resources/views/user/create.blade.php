@extends('layouts.master')

@section('page_title')
    SiFutsal Data Master Admin
@endsection

@section('page_header')
    Tambah Data Master Admin
@endsection

@section('breadcrumb')
    SiFutsal
@endsection

@section('breadcrumb_active')
    Tambah Data Master Admin
@endsection

@section('content')
    <div class="card-body">
        <form class="forms-sample" method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Nama</label>
                <input id="name" placeholder="Nama" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="password-confirm">Confirm Password</label>
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-gradient-primary mr-2">
                    {{ __('Add') }}
                </button>
                <a class="btn btn-light" href="/user" role="button">Cancel</a>
            </div>
        </form>
    </div>
@endsection
