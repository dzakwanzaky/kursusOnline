
    <link rel="stylesheet" href="{{asset('/view')}}/css/style.css">
    @include('base/header_page')
@extends('base/script_here')

 
    <!-- END nav -->
    
    <!-- <div class="js-fullheight"> -->
   


    <!-- LANDING PAGE -->
    <div id="home" class="parallax first-section" style="background-image:url('tema/images/bimbel.jpg');">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                    <div class="row mb-4">
                    @if(Auth::guest())
                        <div class="col-md-7">
                            <h3>Gabung bersama kami dan</h3>
                            <h3>raih suksesmu!</h3>
                            <p class="lead"></p>
                            <a data-scroll href="/registerPilih" class="btn btn-light btn-radius btn-brd" style="font-weight:bold"> GABUNG SEKARANG! </a>
                        </div>
                    @else
                    <div class="col-md-7">
                            <h3>Gabung bersama kami dan</h3>
                            <h3>raih suksesmu!</h3>
                            <p class="lead"></p>
                            <a data-scroll href="/" class="btn btn-light btn-radius btn-brd" style="font-weight:bold">INOFA COURSE</a>
                        </div>
                    @endif    
                    </div>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <div class="bg-light">
    <section class="ftco-section-featured ftco-animate">
      <div class="container-fluid" data-scrollax-parent="true">
        <div class="row no-gutters d-flex align-items-center" data-scrollax=" properties: { translateY: '-30%'}">

        </div>
      </div>
    </section>
  <br>
  <br>
  <br>
  <br>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-6 text-center heading-section ftco-animate">
            <br>
            <br>
            
            <h2 class="mb-4" style="color:#4a4a4a">Kenapa kamu harus memilih Inofa Bimbel ?</h2>
            <p>Anda semakin beruntung karena semua manfaat ini hanya ada di Inofa Bimbel</p>
          </div>
        </div>
        <br>
       
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-3 d-flex justify-content-center mb-3"><span class="align-self-center fa fa-calendar-check-o"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Efektivitas</h2>
                <p>Dengan metode tatap muka memudahkan siswa menyerap materi sehingga belajar makin efektif.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-1 d-flex justify-content-center mb-3"><span class="align-self-center  fa fa-tripadvisor"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Fokus</h2>
                <p>Fokus dengan materi yang diajarkan oleh tutor karena dengan tatap muka secara langsung.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-2 d-flex justify-content-center mb-3"><span class="align-self-center fa fa-refresh fa-spin fa-3x fa-fw"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Fleksibel</h2>
                <p>Penawaran jadwal hari, waktu, dan tempat yang dapat disesuaikan dengan kebutuhan siswa dan tentor.</p>
              </div>
            </div>    
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center"><div class="icon color-4 d-flex justify-content-center mb-3"><span class="align-self-center  fa fa-lightbulb-o"></span></div></div>
              <div class="media-body p-2 mt-3">
                <h2 class="heading" style="color:#4a4a4a; font-family:calibri">Memaksimalkan potensi</h2>
                <p>Kami menawarkan cara belajar yang cocok dan sesuai untuk memaksimalkan potensi setiap siswa</p>
              </div>
            </div>      
          </div>
        </div>
      </div>

    <section class="ftco-section">
      <div class="container">
               <div class="row">
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url('images/work-1.jpg'); " data-scrollax=" properties: { translateY: '-20%'}">
            </a>
            <div class="text">
              <h4 class="subheading">Program</h4>
              <h2 class="heading"><a href="portfolio.html">Banyak program yang kami tawarkan untuk Anda</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">Lihat Program</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image image-2 order-2" style="background-image: url('images/work-2.jpg');" data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text order-1">
              <h4 class="subheading">Soal Latian</h4>
              <h2 class="heading"><a href="portfolio.html">Banyak soal latihan untuk memperdalam pemahaman Anda</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">Lihat Soal</a></p>
            </div>
          </div>
          <div class="block-3 d-md-flex ftco-animate" data-scrollax-parent="true">
            <a href="portfolio.html" class="image" style="background-image: url('images/work-3.jpg'); " data-scrollax=" properties: { translateY: '-20%'}"></a>
            <div class="text">
              <h4 class="subheading">Proses</h4>
              <h2 class="heading"><a href="portfolio.html">Proses pendaftaran mudah, murah dan terpercaya</a></h2>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="portfolio.html" class="btn btn-primary px-4">Daftar Bimbel</a></p>
            </div>
          </div>
        </div>

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
           
            <h2 class="mb-4" style="color:#4a4a4a">Testimoni Pengguna</h2>
            <p>Testimoni dari pengguna yang telah menggunakan Inofa Bimbel untuk membantu meraih mimpi mereka</p>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name" style="color:#4a4a4a">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name" style="color:#4a4a4a">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name" style="color:#4a4a4a">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name" style="color:#4a4a4a">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item text-center">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name" style="color:#4a4a4a">Dennis Green</p>
                    <span class="position" >System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            
            <h2 style="color:#4a4a4a">FAQ</h2>
            <p>Pertanyaan umum yang sering ditanyakan mengenai Inofa Bimbel</p>

          </div>

        </div>
      </div>
  
    </section>


  </div>

</section>


</section>

   @include('base/footer_page')

  <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>


    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('/view')}}/js/jquery.min.js"></script>
  <script src="{{asset('/view')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('/view')}}/js/popper.min.js"></script>
  <script src="{{asset('/view')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('/view')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('/view')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('/view')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('/view')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('/view')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('/view')}}/js/aos.js"></script>
  <script src="{{asset('/view')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('/view')}}/js/bootstrap-datepicker.js"></script>
  <script src="{{asset('/view')}}/js/jquery.timepicker.min.js"></script>
  <script src="{{asset('/view')}}/js/particles.min.js"></script>
  <script src="{{asset('/view')}}/js/particle.js"></script>
  <script src="{{asset('/view')}}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('/view')}}/js/google-map.js"></script>
  <script src="{{asset('/view')}}/js/main.js"></script>
    
  </body>
</html>