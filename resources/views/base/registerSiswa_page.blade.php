@extends('base/script_page')
@section('content')
    <div class="main">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <br>
            <div class="col-md-12 col-md-offset-1">
            <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
              <div class="card-body">
            <form method="POST" action="{{ route('register')}}" class="signup-form">
                @csrf

                <h2 class="form-title">Daftar Akun Imam Courses</h2>
                <form action="/pendaftaranSiswa">
                    <button class="button" style="float:left">Murid</button>
                <form action="#">
                    <button class="button2" disabled="disabled">Tutor</button>
                </form>
                <label for="nama">Nama Lengkap</label>
                <div class="form-textbox">
                    <input type="tel" name="no-telp" id="nama" placeholder="Nama Lengkap" 
                        class="form-control @error('no-telp') is-invalid @enderror" value="{{ old('no-telp') }}" required autocomplete="no-telp"/>
                </div><br>
                
                

                <label for="notelp">No Telepon</label>
                <div class="form-textbox">
                    <input type="tel" name="no-telp" id="no-telp" placeholder="No Telepon" 
                        class="form-control @error('no-telp') is-invalid @enderror" value="{{ old('no-telp') }}" required autocomplete="no-telp"/>
                </div><br>

                <label for="email">Email</label>
                <div class="form-textbox">
                    <input type="email" name="email" id="email" placeholder="Email"
                        class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email"/>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div><br>

                <label for="pass">Kata Sandi</label>
                <div class="form-textbox">
                    <input type="password" name="pass" id="password" placeholder="Password"
                        class="form-control @error('password') is-invalid @enderror" required autocomplete="new-password"/> 

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div><br>

                <label for="confirm-password">Konfirmasi Password</label>
                <div class="form-textbox">
                    <input type="password" name="confirm-password" id="confirm-password" placeholder="Masukkan ulang password" 
                        class="form-control" required autocomplete="new-password"/>
                </div><br><br>

                <div class="form-group">
                            <button type="submit" class="btn btn-success">Daftar</button>
                        </div>
            </form>
            <p class="loginhere">
            Sudah punya akun ?<a href="{{ route ('login')}}" class="loginhere-link"> Masuk Sekarang</a>
            </p>
            </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection
