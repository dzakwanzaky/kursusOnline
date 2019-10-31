@extends('base/script_page')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
    <div class="container-content">
        <div class="sign-up-content">
            <form method="POST" action="{{ route('register')}}" class="signup-form">
                @csrf

                <h2 class="form-title">Daftar Akun Imam Courses</h2>

                <label for="notelp">No Telepon</label>
                <div class="form-textbox">
                    <input type="tel" name="no-telp" id="no-telp" placeholder="No Telepon" 
                        class="form-control @error('no-telp') is-invalid @enderror" value="{{ old('no-telp') }}" required autocomplete="no-telp"/>
                </div><br>

                <label for="email">Email</label>
                <div class="form-textbox">
                    <input type="email" name="email" id="email" 
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
