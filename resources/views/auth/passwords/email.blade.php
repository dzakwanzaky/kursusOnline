@include('base/header_pagek')
@extends('base/script_pageiniy')

@section('content')
<style type="text/css">
    .btn.btn-primary {
        margin-left: 20px;

    }


    .form-control::-webkit-input-placeholder{color:#ced4da; font-size:15px;opacity:1}



       .form-control {
    display: block;
    margin-left: 10px;
    width: 117%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0.7em;
    }
    @media screen and (width: 768px) {
    
         .btn.btn-primary {
        margin-left: 27px;
    }

    .alert.alert-success{
        font-size: 13px;
    }
    }
    @media screen and (width: 736px) {
    
         .btn.btn-primary {
        margin-left: 9em;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    }
    @media screen and (width: 731px) {
    
         .btn.btn-primary {
        margin-left: 9em;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    }
    @media screen and (width: 823px) {
    
         .btn.btn-primary {
        margin-left: 1.4em;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 127%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    }
    @media screen and (width: 667px) {
    
         .btn.btn-primary {
        margin-left: 9em;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    }
    @media screen and (width: 640px) {
    
         .btn.btn-primary {
        margin-left: 9em;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    }
      @media screen and (width: 568px) {
    
         .btn.btn-primary {
        margin-left: 9em;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    }
     @media screen and (width: 375px) {
    
         .btn.btn-primary {
        margin-left: 60px;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.alert.alert-success{
        font-size: 13px;
    }
    .invalid-feedback{
        margin-left: 0em;
    }
    
    }
     @media screen and (width: 360px) {
    
         .btn.btn-primary {
        margin-left: 55px;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    
    }
      @media screen and (width: 411px) {
    
         .btn.btn-primary {
        margin-left: 65px;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    
    }
    @media screen and (width: 320px) {
    
         .btn.btn-primary {
        margin-left: 30px;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.card-header {
    font-size: 14px;
}
.alert.alert-success{
        font-size: 13px;
    }
    .invalid-feedback{
        margin-left: 0em;
    }
    }
    @media screen and (width: 414px) {
    
         .btn.btn-primary {
        margin-left: 68px;
    }
    .form-control {
    display: block;
    margin-left: 0px;
    width: 100%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
.form-control:focus{
 color:#495057;
 background-color:#fff;
 border-color:#80bdff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
.invalid-feedback{
        margin-left: 0em;
    }
    
    }
    @media screen and (width: 812px) {
    
         .btn.btn-primary {
        margin-left: 27px;
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
            <div class="card">
                <div class="card-header">{{ __('Atur Ulang Kata Sandi Anda') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<br>
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email">{{ __('Alamat Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukan email Anda" autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                    {{ __('Kirim Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
