@include('base/header_pageo')
@extends('base/script_page')
@section('content')
<style type="text/css">
    h2 {
        margin-left: 3em;

    }

    labell {
        font-size: 17px;

    }
    .form-tile{
        margin-left: 5em;
         font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
         font-size: 20px;
    }
    .help-block {
        color: red;
    }

    .has-error {
        color: red;
    }
    .loginhere-link{
        font-weight: 500;
    }
    @media screen and (width: 375px) {
        .form-tile {
            width: 10em;
            margin-left:20px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    }
     @media screen and (width: 360px) {
        .form-tile {
            width: 10em;
            margin-left: 5px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    }
    @media screen and (width: 320px) {
        .form-tile {
            width: 9em;
            margin-left: 0px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    }
    @media screen and (width: 414px) {
        .form-tile {
            width: 10em;
            margin-left: 40px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    }
    @media screen and (width: 411px) {
        .form-tile {
            width: 10em;
            margin-left: 35px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        }

    }
</style>
<div class="main">
    <div class="card">
        <div class="card-body">
            <form class="signup-form" role="form" method="POST" action="{{ route('register.store') }}">
                {{ csrf_field() }}

                <h2 class="form-tile">Daftar Akun Siswa</h2>


                <labell for="name">Nama Lengkap</labell>
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <div class="form-title">
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}"
                            placeholder="Masukan nama Anda" autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            {{ $errors->first('name') }}
                        </span>
                        @endif
                    </div>
                </div>




                <labell for="phone">No Telepon</labell>
                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <div class="form-title">
                        <input id="phone" type="phone" class="form-control" name="phone"
                            placeholder="Masukan no telp Anda" value="{{ old('phone') }}">

                        @if ($errors->has('phone'))
                        <span class="help-block">
                            {{ $errors->first('phone') }}
                        </span>
                        @endif
                    </div>
                </div>


                <labell for="email">Email</labell>
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <div class="form-title">
                        <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="Masukan email Anda" value="{{ old('email') }}">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            {{ $errors->first('email') }}
                        </span>
                        @endif
                    </div>
                </div>


                <labell for="password">Kata Sandi</labell>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="input-group">
                        <input id="password" type="password" name="password" class="form-control" data-toggle="password"
                            placeholder="Masukan kata sandi Anda" value="{{ old('password') }}">


                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fa fa-eye"></i></span>
                        </div>



                    </div>
                    @if ($errors->has('password'))
                    <span class="help-block">
                        {{ $errors->first('password') }}
                    </span>
                    @endif
                </div>

                <div class="form-group">
                    <labell for="password-confirm">Konfirmasi Kata Sandi</labell>
                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                        <div class="input-group">
                            <input id="password_confirmation" type="password" name="password_confirmation"
                                class="form-control" data-toggle="password" placeholder="Masukan ulang kata sandi Anda">

                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fa fa-eye"></i></span>
                            </div>
                        </div>
                        @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            {{ $errors->first('password_confirmation') }}
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6">
                        <input id="role" type="text" class="form-control" name="role" required style="display:none"
                            value="siswa">

                        @if ($errors->has('role'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                        @endif
                    </div>
                    <br>

                    <div class="form-group">
                        <button type="submit" class="btn btn-masuk"
                            style="border-radius:50px; margin-left:auto; margin-right:auto;">
                            Daftar
                        </button>
                    </div>
            </form>
            <p class="loginhere">
                Sudah punya akun ?<a href="/login" class="loginhere-link"> Masuk Sekarang</a>
            </p>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.onload = function () {


        ! function (a) {
            a(function () {
                a('[data-toggle="password"]').each(function () {
                    var b = a(this);
                    var c = a(this).parent().find(".input-group-text");
                    c.css("cursor", "pointer").addClass("input-password-hide");
                    c.on("click", function () {
                        if (c.hasClass("input-password-hide")) {
                            c.removeClass("input-password-hide").addClass(
                                "input-password-show");
                            c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
                            b.attr("type", "text")
                        } else {
                            c.removeClass("input-password-show").addClass(
                                "input-password-hide");
                            c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
                            b.attr("type", "password")
                        }
                    })
                })
            })
        }(window.jQuery);


    }
</script>



<script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent) {
        window.parent.parent.postMessage(["resultsFrame", {
            height: document.body.getBoundingClientRect().height,
            slug: "zkou4dej"
        }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
</script>
</form>
</div>
</div>
</div>

@endsection
