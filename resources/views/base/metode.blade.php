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
