@include('base/header_page2')
@extends('base/script_page')
@section('content')
    <div class="main">    
        <div class="card">
            <div class="card-body"> 
            <form class="signup-form" role="form" method="POST" action="{{ url('/register') }}">
                {{ csrf_field() }}
                
                <h2 class="form-title">Daftar Akun Tutor Inofa Courses</h2>

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
                        <input id="phone" type="number" class="form-control" name="phone" required>

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
                    <input id="role" type="text" class="form-control" name="role" required style="display:none" value="tutor">

                    @if ($errors->has('role'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role') }}</strong>
                        </span>
                    @endif
                </div>
                <br>           
                <div class="form-group">
                    <div class="form-title">
                        <button type="submit" class="btn btn-masuk">
                            Daftar
                        </button>
                    </div>
                </div>
                
            </form>
            <p class="loginhere">
                Sudah punya akun ?<a href="/login" class="loginhere-link"> Masuk Sekarang</a>
            </p>
            </div>
            </div>
        </div>
    </div>
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
</form>
</div>
</div>
</div>
<br>

@endsection
