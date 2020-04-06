@extends('base/script_page')
@section('content')
    <div class="main">
        <div class="card">
              <div class="card-body">
            <form method="POST" action="{{ route('register.create')}}" class="signup-form">
                @csrf

                <h2 class="form-title">Daftar Akun Imam Courses</h2>

                <label for="notelp">No Telepon</label>
                <div class="form-textbox">
                <input id="phone" type="phone" class="form-control" name="phone" required autocomplete="new-password">
                </div><br>

                <label for="email">Nama</label>
                <div class="form-textbox">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div><br>

                <label for="pass">Email</label>
                <div class="form-textbox">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div><br>

                <label for="confirm-password">Password</label>
                <div class="form-textbox">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div><br>

                <label for="confirm-password">Konfirmasi Password</label>
                <div class="form-textbox">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div><br>

                <div class="form-textbox">
                    <input type="submit" name="submit" id="submit" class="submit" value="Daftar" />
                </div>
            </form>

            <p class="loginhere">
                Sudah punya akun ?<a href="#" class="loginhere-link"> Masuk Sekarang</a>
            </p>
        </div>
    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
@endsection
