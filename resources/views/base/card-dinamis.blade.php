@include('base/nyekrip')


		<div class="content-wrapper">

			<!-- Page header -->
			<div class="page-header page-header-light" >
				<div class="page-header-content header-elements-md-inline">
				

				</div>

		<br>
		<br>
		<br>
			<div class="content">
				<div class="row">
					<br>
					@php $no = 1; @endphp
                    @foreach($data as $d)
					<div class="col-md-4">

						<!-- Left alignment -->
							<br>
							<div class="card text-center" style="height:360;">
							<div class="card-body"><br>
								 <img src="{{$d->getAvatar()}}" width="100" height="90"></img>
								<h5 class="card-title"><font size="3"><b><font color="#000000"><br>{{ $d->program}}</font></b></font></h5>
								<p2 class="mb-3"><font face="calibri"><font color="#565656">{{ $d->keterangan}}</font></font></p2>
									<br>
									<br>
								<a href="/program/{{$d->id}}/rinci" class="btn bg-primary-400">Selanjutnya <i class="icon-arrow-right14 ml-2"></i></a>
							</div>
						</div>
						</div>
					@endforeach
						<!-- /left alignment -->

						

						<!-- /right alignment -->

		


</div>
</div>


