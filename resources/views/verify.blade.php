@extends('base/script_page_verify')
@section('content')

<div class="main">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br>
            <br>
            <br>
            <div class="card">
                <div class="card-header">{{ __('Silakan masukan kode yang telah kami kirimkan ke no telp Anda') }}</div>

                <div class="card-body">
                    @if(Session::has('message'))
                        <div class="alert alert-danger">{{Session::get('message')}}</div>
                    @endif
                    <form method="POST" action="{{ route('verify') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-right"><br>{{ __('Kode') }}</label>

                            <div class="col-md-7"><br>
                                <input id="code" type="text" class="form-control{{ $errors->has('code') ? ' is-invalid' : '' }}" name="code" required>

                                @if ($errors->has('code'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('Code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-masuk-1">
                                 {{ __('Verifikasi') }}
                                </button>

                           
                            </div>
                        </div>
 
                    </form>
                </div>
                <div class="card-footer">
                    <a href="">Kirim kode baru</a>
                    <input type="hidden" name="phone" value="$request['phone']">
                </div>
            </div>
        </div>
    </div>
</div>

@endsection