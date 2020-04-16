   @include('base/header_page0')
@extends('base/script_h')
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/button')}}/paket.css">
<link rel="stylesheet" href="{{asset('/button')}}/dropdown.css">
<link rel="stylesheet" href="{{asset('/button')}}/owl.carousel.css">
<link rel="stylesheet" href="{{asset('/button')}}/owl.theme.default.min.css">

</head>
<bod>
	<br>
<!-- 
<div class="select">
   <select name="format" id="format">
      <option selected disabled>Pilih paket</option>
      <option value="pdf">PDF</option>
      <option value="txt">txt</option>
      <option value="epub">ePub</option>
      <option value="fb2">fb2</option>
      <option value="mobi">mobi</option>
   </select>
</div>
 -->	<section class="priching">

		<section class="heading">Paket Bimbingan Belajar SD</section>
		<div class="container">
			<div class="row">

	<div class="owl-carousel owl-theme">
    @foreach($datas as $u)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$u->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$u->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$u->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$u->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

@endforeach



    		</div>
			</div>
		</div>
	</section>

<section class="priching">
		<section class="heading">Paket Bimbingan Belajar SMP</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				@foreach($dats as $u)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$u->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$u->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$u->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$u->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

@endforeach



			</div>
		</div>
	</section>


<section class="priching">
		<section class="heading">Paket Bimbingan Belajar SMA</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				@foreach($das as $v)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$v->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$v->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$v->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$v->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

@endforeach



			</div>
		</div>
	</section>

<section class="priching">
		<section class="heading">Paket Bimbingan Belajar SBMPTN</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				@foreach($sbm as $w)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$w->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$w->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$w->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$w->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

@endforeach



			</div>
		</div>
	</section>



<section class="priching">
		<section class="heading">Paket Bimbingan Belajar CPNS</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				@foreach($cpns as $z)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$z->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$z->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$z->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$z->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

@endforeach



			</div>
		</div>
	</section>
<section class="priching">
		<section class="heading">Paket Bimbingan Belajar Komputer</section>
		<div class="container">
			<div class="row">
<div class="owl-carousel owl-theme">
				@foreach($komp as $m)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$m->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$m->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$m->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$m->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
							</ul>	
						</div>
					
						<div class="price-bottom">
							
						</div>
					</div>
				</div>

@endforeach



			</div>
		</div>
	</section>

	<script src="{{asset('/button')}}/jquery.min.js" type="text/javascript"></script>
<script src="{{asset('/button')}}/owl.carousel.js" type="text/javascript"></script>
<script type="text/javascript">
	$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
</script>

</bod>

