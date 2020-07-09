@include('base/header_pageo')
@extends('base/script_pageiniy')
@section('content')
<style>
    @media screen and (width: 320px) {
    ..btn-link {
    font-weight: bolder;
    font-size: 15px;
    color: #007bff;
    margin-right: 5em;
    background-color: transparent;
}
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <br>
        <br>
        <br>
        <br>
        <br>
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Permintaan kode aktivasi akun telah dikirim kembali') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, silakan periksa email Anda untuk melakukan verifikasi. ') }}
                    {{ __('Jika Anda tidak menerima email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klik disini') }}</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection