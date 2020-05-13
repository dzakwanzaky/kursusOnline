@extends('murid/base')
@section('content')
   <link rel="stylesheet" href="{{asset('/assets/css/toastr.min.css')}}">

<style>
  
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 6.5em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
.image-preview__image{
    display: none;
    width: 100%;
}
.image-preview__default-text {
    color:#87ceeb;

}
#inpFile {
    margin-left: 10em;

}

input[type="file"]{
    display: none;
}
label {
    color: white;
    height: 35px;
    width: 105px;
    background-color: #03a9f4;
    position: absolute;
    margin-left: 8.5em;
    padding: 10px;
    border-radius: 10px;
    padding-top: 8px;
    padding-left: 20px;
    font-weight: lighter;
    font-size: 12px;
    display: flex;
    justify-content: center;
    align-items: center;
}
label:hover {
    opacity: 80%;
}

</style>
<link rel="stylesheet" href="{{asset('/assets')}}/bootstrap/css/bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Invoice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
              <table class="table table-responsive-lg table-bordered small" id="jadwal">
                <thead class="thead-dark">
                    <tr>
                        <th>No.</th>
                        <th>No. Invoice</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Program</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tagihan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    @php $no = 1; @endphp
                        <td>{{ $no++ }}. </td>
                        <td># 
                        @foreach($invoice as $i)
                        {{ $i->invoice }}
                  
                        </td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ $i->kelas->kelas }} {{ $i->program->program }} </td>
                        <td>{{ $i->program->program }}</td>
                        <td>
                        @endforeach
                        @foreach($alamat as $a)
                        {{ $a->kecamatan }}, {{ $a->kabupaten }}, {{ $a->provinsi }}
                        @endforeach
                        </td>
                        <td>
                        @foreach($alamat as $a)
                          <a class=" btn btn-sm btn-danger" style="color:white;">
                            <span> {{ $a->status }}</span>
                          </a>
                        @endforeach
                        </td>
                        <td>
                      @foreach($invoice as $i)
                      @if($i->file==null)
                        <a class="btn btn-sm btn-success" style="color:white;" target="_blank" data-toggle="modal" data-target="#importExcel">
                        <span class="fa fa-upload"></span>
                    </a>
                      @else
                      <p>Terupload</p>
                      @endif
                 
                        </td>
                        <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="/unggah" enctype="multipart/form-data">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Unggah Bukti Pembayaran</h5>
                            </div>
                            <div class="modal-body">
                        
                              {{ csrf_field() }}
                        <br>
                              

    <div class="image-preview" id="imagePreview">
    <img src="" alt="Image Preview" class="image-preview__image">
        <span class="image-preview__default-text">
        +</span>
    </div>
    <br>

    <input type="file" name="file" id="inpFile" accept="image/*" required>
    <label for="inpFile"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;
        Pilih foto
    </label>
 

<script>
    const inpFile = document.getElementById("inpFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(".image-preview__image");
    const previewDefaultText = previewContainer.querySelector(".image-preview__default-text");

    inpFile.addEventListener("change", function(){

        const file = this.files[0];

        if (file){
            const reader = new FileReader();

            previewDefaultText.style.display = "none";
            previewImage.style.display = "block";

            reader.addEventListener("load", function(){
    
                previewImage.setAttribute("src", this.result);
            });

            reader.readAsDataURL(file);
        }else {
            previewDefaultText.style.display = null;
            previewImage.style.display = null;
            previewImage.setAttribute("src", "");
        }
    });
</script>
</div>
<br>

                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                              <button type="submit" class="btn btn-primary">Unggah</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>


                        <td>
                          <a  href="{{route('invoicePDF', $i->id_murid)}}" target="_blank" class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-download"></span>
                          </a>
                        </td>

                        @endforeach
                    </tr>
                </tbody>
            </table>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  
  <script
      src="https://code.jquery.com/jquery-3.4.1.min.js"
      integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
      crossorigin="anonymous"></script>
      <script src="{{asset('/assets')}}/js/bootstrap.min.js"></script>
      <script src="{{asset('/assets/js/toastr.min.js')}}"></script>
<script>
    @if(Session::has('success'))
    toastr.success("{{ Session::get('success') }}")
    @endif
</script>
  @endsection