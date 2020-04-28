@include('base/header_page')
@extends('base/script_page')
@section('content')
<style type="text/css">
    h2 {
        margin-left: 2em;

    }
</style>
    <div class="main">
            <div class="card">
              <div class="card-body">
              <h2 class="form-title">Daftar Akun Inofa Courses</h2><br>
              <p class="loginhere" style="color: #4a4a4a; font-size: 16px">
                Daftar Sebagai
              </p>
              <div class="form-group row"  style="display:block; margin-left:auto; margin-right:auto; text-align:center;">
                <div>
                  <a href="/registerSiswa" class="link link--btn register-page__btn">
                    <button type="submit" class="button">Siswa</button>
                  </a>
                  <div>
                  <span style="text-align:center;color: #4a4a4a; font-size: 16px">Atau</span></div>
                  <a href="/registerTutor" class="link link--btn register-page__btn">
                    <button type="submit" class="button2">Tutor</button>
                  </a>
                </div>
              </div>
              <p class="loginhere">
                Sudah punya akun ?<a href="/login" class="loginhere-link"> Masuk Sekarang</a>
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
