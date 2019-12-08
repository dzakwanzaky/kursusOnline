@extends('base/script_page')
@section('content')
    <div class="main">
            <div class="card">
              <div class="card-body">
                <form class="signup-form" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <h2 class="form-title">Daftar Akun Imam Courses Daftar Siswa</h2>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name">Nama Lengkap</label>

                        <div class="form-title">
                            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                        <label for="phone">No Telepon</label>

                        <div class="form-title">
                            <input id="phone" type="phone" class="form-control" name="phone" required>

                            @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email</label>

                        <div class="form-title">
                            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Kata Sandi</label>

                        <div class="form-title">
                            <input id="password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password-confirm">Konfirmasi Kata Sandi</label>

                        <div class="form-title">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                        </div>
                    </div>
                    
                    

                    <div class="col-md-6">
                        <input id="role" type="text" class="form-control" name="role" required style="display:none" value="siswa">

                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                    <br>
                                
                    <div class="form-group">
                        <button type="submit" class="btn btn-masuk" style="border-radius:50px; margin-left:auto; margin-right:auto;">
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
@endsection
