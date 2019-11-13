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
              <h2 class="form-title">Daftar Akun Imam Courses</h2>
              <br>
              <p class="loginhere">
                Daftar Sebagai
              </p>
              <br>
              <div class="form-group row">
                <div style="display:block; margin-left:auto; margin-right:auto; text-align:center;">
                  <a href="/registerSiswa" class="link link--btn register-page__btn">
                    <button type="submit" class="button">Murid</button>
                  </a>
                  <span style="text-align:center;">Atau</span>
                  <a href="/registerTuror" class="link link--btn register-page__btn">
                    <button type="submit" class="button2">Tutor</button>
                  </a>
                </div>
              </div>
              <p class="loginhere">
                Sudah punya akun ?<a href="#" class="loginhere-link"> Masuk Sekarang</a>
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
