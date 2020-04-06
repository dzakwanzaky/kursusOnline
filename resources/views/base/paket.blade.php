   @include('base/header_page0')
@extends('base/script_h')
<head>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{asset('/button')}}/paket.css">
</head>
<bod>
	<section class="priching">
		<section class="heading">Paket Bimbingan Belajar SD</section>
		<div class="container">
			<div class="row">

				@foreach($datas as $t)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$t->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$t->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$t->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$t->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
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
		<section class="heading">Paket Bimbingan Belajar SMP</section>
		<div class="container">
			<div class="row">

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
		<section class="heading">Paket Bimbingan Belajar STAN</section>
		<div class="container">
			<div class="row">

				@foreach($stan as $x)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$x->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$x->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$x->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$x->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
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
		<section class="heading">Paket Bimbingan Belajar UTUL UGM</section>
		<div class="container">
			<div class="row">

				@foreach($utul as $y)
				<div class="col-sm-4">
					<div class="price-table">
						<div class="price-head">
							<p>Paket</p>
							<h4>{{$y->nama_paket}}</h4>
							<h2><span class="supertext">Rp</span><h4i>{{$y->harga}}</h4i><span class="subtext">/Bulan</span></h2>
						</div>
						<div class="price-content">
							<ul>
								<li><span class="text">{{$y->jumlah_mapel}}&nbsp;</span>pilihan mapel</li>
								<li><span class="text">60&nbsp;</span>menit durasi</li>
								<li><span class="text">{{$y->jumlah_pertemuan}}&nbsp;</span>kali pertemuan</li>
								
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

</bod>

