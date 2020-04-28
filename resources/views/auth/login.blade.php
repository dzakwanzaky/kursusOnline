@include('base/header_page')
@extends('base/script_page')
@section('content')
 <style type="text/css">
    h2 {
        margin-left: 5em;

    }
    labell {
        font-size: 17px;

    }
    .daftar {
        font-weight: bolder;
    }
</style>
    <div class="main">
    <div class="card">
              <div class="card-body">
            <form method="POST" action="{{ route('login')}}">
                @csrf

                <h2 class="form-title">Masuk Akun</h2>
                <br>

                <labell for="email">Email</labell>
                <div class="form-textbox">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Masukan email Anda">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div><br>

                <labell for="pass">Kata Sandi</labell>
                <div class="input-group">
                      <input id="password" type="password" name="password" class="form-control" data-toggle="password" placeholder="Masukan kata sandi Anda">
                      <div class="input-group-append">
                      <span class="input-group-text"><i class="fa fa-eye"></i></span>
                      </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                </div><br>

<script type="text/javascript">

    window.onload=function(){
      

!function(a){a(function(){a('[data-toggle="password"]').each(function(){var b = a(this); var c = a(this).parent().find(".input-group-text"); c.css("cursor", "pointer").addClass("input-password-hide"); c.on("click", function(){if (c.hasClass("input-password-hide")){c.removeClass("input-password-hide").addClass("input-password-show"); c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash"); b.attr("type", "text")} else{c.removeClass("input-password-show").addClass("input-password-hide"); c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye"); b.attr("type", "password")}})})})}(window.jQuery);


    }

</script>


  
  <script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent){
      window.parent.parent.postMessage(["resultsFrame", {
        height: document.body.getBoundingClientRect().height,
        slug: "zkou4dej"
      }], "*")
    }

    // always overwrite window.name, in case users try to set it manually
    window.name = "result"
  </script>
  
                <div class="form-textbox">
                    <button type="submit" class="btn-masuk">
                        {{ __('Masuk') }}
                    </button>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}></input>
                        <label class="form-check-label" for="remember">Ingat saya ?</label>
                        <a href="{{ url('/password/reset') }}" style="font-weight: inherit;color: #408ABD;;"> | Lupa Kata Sandi</a>
                </div>
            </form>

            <p class="loginhere">
                Belum punya akun ?<a href="/registerPilih" class="signuphere-link"> Daftar Sekarang</p></a>
            </p>
        </div>
    </div>


    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
</div>

@endsection
