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
                        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                            autofocus>

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
                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            required>

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
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required>
                    </div>
                </div>



                <div class="col-md-6">
                    <input id="role" type="text" class="form-control" name="role" required style="display:none"
                        value="tutor">

                    @if ($errors->has('role'))
                    <span class="help-block">
                        <strong>{{ $errors->first('role') }}</strong>
                    </span>
                    @endif
                </div>
                <br>
                <div class="form-group">
                    <div class="form-title">
                        <button type="button" class="btn btn-masuk" data-toggle="modal" data-target="#exampleModalLong">
                            Daftar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="col-12 modal-title text-center" id="exampleModalLongTitle"
                                    style="font-size:30px">Syarat Dan Ketentuan Pendaftaran Tutor</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Pendaftaran

                                Dalam proses registrasi menjadi Tutor, Anda diwajibkan untuk mengisi semua kelengkapan
                                informasi pribadi Anda, termasuk data, profil singkat, pengalaman mengajar, serta bukti
                                kualifikasi untuk mata pelajaran tertentu. Anda harus mencantumkan nama lengkap (bukan
                                nama alias).
                                Seluruh informasi yang dimasukkan harus informasi yang benar dan akurat.
                                Nomor telepon yang dicantumkan adalah nomor yang aktif, sehingga Tutordoors.com dapat
                                menghubungi sewaktu-waktu apabila diperlukan.
                                Tutordoors.com berhak untuk menolak aplikasi pendaftaran Anda sebagai Tutor dengan
                                alasan yang jelas, seperti profil tidak dilengkapi, tutor yang mendaftar tidak sesuai
                                dengan kualifikasi yang diperlihatkan dengan hasil online test, dan alasan lainnya.
                                <br>
                                <b>Akun Tutor
                                </b>

                                Anda bertanggung jawab untuk menjaga kerahasiaan akun dan password dan membatasi akses
                                ke komputer Anda.
                                Anda setuju bertanggung jawab atas semua yang terjadi perihal penggunaan akun pribadi
                                dan password Anda.
                                Anda setuju untuk segera memberitahukan Tutordoors.com tentang setiap penyalahgunaan
                                akun atau pelanggaran keamanan lainnya yang berkaitan dengan akun Anda.
                                Tutordoors.com tidak akan bertanggung jawab atas kerugian atau kerusakan yang timbul
                                akibat kegagalan dalam memahami dan mematuhi syarat dan ketentuan ini.
                                Tutordoors.com berhak untuk menolak layanan atau menghentikan akun.
                                <br>
                                <b>Profil Tutor</b>

                                Anda setuju untuk mengisi semua informasi pribadi seakurat mungkin.
                                Anda, dan bukan Tutordoors.com, bertanggung jawab penuh atas semua materi yang Anda
                                gunakan di Tutordoors.com.
                                Online Test

                           </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-primary" type="submit">Setuju</button>
                            </div>
                        </div>
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
    window.onload = function () {


        ! function (a) {
            a(function () {
                a('[data-toggle="password"]').each(function () {
                    var b = a(this);
                    var c = a(this).parent().find(".input-group-text");
                    c.css("cursor", "pointer").addClass("input-password-hide");
                    c.on("click", function () {
                        if (c.hasClass("input-password-hide")) {
                            c.removeClass("input-password-hide").addClass(
                                "input-password-show");
                            c.find(".fa").removeClass("fa-eye").addClass("fa-eye-slash");
                            b.attr("type", "text")
                        } else {
                            c.removeClass("input-password-show").addClass(
                                "input-password-hide");
                            c.find(".fa").removeClass("fa-eye-slash").addClass("fa-eye");
                            b.attr("type", "password")
                        }
                    })
                })
            })
        }(window.jQuery);


    }
</script>



<script>
    // tell the embed parent frame the height of the content
    if (window.parent && window.parent.parent) {
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
