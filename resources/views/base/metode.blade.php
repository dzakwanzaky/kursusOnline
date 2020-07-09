@include('base/header_page')
@extends('base/script_page')
@section('content')
<style type="text/css">
    h2.form-title {
        margin-left: 4em;
        font-size: 20px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";


    }
    @media screen and (width: 375px) {
       h2.form-title {
        margin-left: 0em;
        width: 13em;
        font-size: 20px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

    }
    }
     @media screen and (width: 360px) {
       h2.form-title {
        margin-left: -0.5em;
        width: 13em;
       font-size: 20px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    }
    }
    @media screen and (width: 320px) {
       h2.form-title {
        margin-left: -1em;
        width: 12em;
        font-size: 20px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

    }
    }
    @media screen and (width: 414px) {
       h2.form-title {
        margin-left: 0.7em;
        width: 13em;
        font-size: 20px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

    }
    }
    @media screen and (width: 411px) {
       h2.form-title {
        margin-left: 0.7em;
        width: 13em;
        font-size: 20px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";

    }
    }
</style>
    <div class="main">
            <div class="card">
              <div class="card-body">
              <h2 class="form-title">Pilih Metode Bimbingan</h2><br>
              <p class="loginhere" style="color: #4a4a4a; font-size: 16px">
                Pilih metode
              </p>
              <div class="form-group row"  style="display:block; margin-left:auto; margin-right:auto; text-align:center;">
                <div>
                  <a href="/paketProgramOffline" class="link link--btn register-page__btn">
                    <button type="submit" class="button">Offline</button>
                  </a>
                  <div>
                  <span style="text-align:center;color: #4a4a4a; font-size: 16px">Atau</span></div>
                  <a href="/paketProgramOnline" class="link link--btn register-page__btn">
                    <button type="submit" class="button2">Online</button>
                  </a>
                </div>
              </div>
              
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
