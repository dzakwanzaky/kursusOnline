@include('base/header_page')
@extends('base/script_page')
@section('content')
<style type="text/css">
    h2 {
        margin-left: 3.4em;

    }
    .loginhere-link{
      font-weight: 500;
    }
    .form-title{
      font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 20px;
    }
    @media screen and (width: 375px) {
      .form-title {
        width: 13em;
        margin-left: -1em;
        font-size: 21px;
         font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    }
     @media screen and (width: 360px) {
      .form-title {
        width: 13em;
        margin-left: -10px;
        font-size: 21px;
        margin-left: -1em;
         font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }

    }
    @media screen and (width: 414px) {
      .form-title {
        width: 13em;
        margin-left: 3px;
        font-size: 21px;
         font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    }
    @media screen and (width: 411px) {
      .form-title {
        width: 13em;
        margin-left: 3px;
        font-size: 21px;
         font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    }
    @media screen and (width: 320px) {
      .form-title {
        width: 15em;
        font-size: 18px;
        margin-left: -1em;
        font-size: 18px;
         font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
      .link--btn {
    display: inline-block;
    position: relative;
    padding: 10px 20px;
    border-radius: 5px;
    outline: 0;
    border: 0;
    color: #fff;
    font-weight: 500;
    letter-spacing: .5px;
    text-align: center;
    margin-left: -20px;
}
   
    }
</style>
    <div class="main">
            <div class="card">
              <div class="card-body">
              <h2 class="form-title">Daftar Akun Inofa Bimbel</h2><br>
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
