<?php $__env->startSection('content'); ?>
   <link rel="stylesheet" href="<?php echo e(asset('/assets/css/toastr.min.css')); ?>">

<style>
  
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 8em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
 .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 7em;

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
    margin-top: 1em;
}
label:hover {
    opacity: 80%;
}
.modall-title {
    margin-bottom: 0;
    line-height: 1.5;
    margin-left: 5.2em;
}
@media  screen and (width: 375px) {
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 3.5em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
 .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 3em;

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
    margin-left: 4em;
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
}
@media  screen and (width: 360px) {
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 2.5em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
 .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 2em;

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
    margin-left: 2.6em;
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
.modall-title {
  margin-left: 1.7em;
}
}
@media  screen and (width: 414px) {
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 4em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
 .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 3.5em;

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
    margin-left: 4em;
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
.modall-title {
  margin-left: 3em;
}
}
@media  screen and (width: 411px) {
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 4em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
 .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 3.3em;

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
    margin-left: 4em;
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
.modall-title {
  margin-left: 3em;
}
}
@media  screen and (width: 320px) {
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 1em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
 .help-block3 {
        color: red;
        font-size: 13px;
        margin-left: 1.2em;

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
    margin-left: 1em;
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
.modall-title {
  margin-left: 3em;
}
}
@media  screen and (width: 568px) {
.image-preview {
    width: 250px;
    min-height: 170px;
    border: 2px dashed #afeeee;
    margin-top: 15px;
    margin-left: 10em;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    color: #cccccc;
}
 .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 9em;

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
    margin-left: 11em;
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
.modall-title {
  margin-left: 6em;
}
}
</style>
<link rel="stylesheet" href="<?php echo e(asset('/card')); ?>/bootstrap/css/bootstrap.min.css">
<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pembelian</h1>
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
                        <th>No. Pembelian</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Paket</th>
                        <th>Lokasi</th>
                        <th>Status</th>
                        <th>Bukti Pembayaran</th>
                        <th>Tagihan</th>
                    </tr>
                </thead>
                <?php $no = 1; ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tbody>
                    <tr>
                    

                        <td><?php echo e($no++); ?>. </td>
                        <td># 
                        <?php echo e($d->invoice); ?>

                  
                        </td>
                        <td><?php echo e($d->user->name); ?></td>
                        <td><?php echo e($d->kelas->kelas); ?> <?php echo e($d->program->program); ?> </td>
                        <td><?php echo e($d->paket->nama_paket); ?></td>
                        <td>
                  
                        <?php echo e($d->siswa->kecamatan); ?>, <?php echo e($d->siswa->kabupaten); ?>, <?php echo e($d->siswa->provinsi); ?>

                        </td>
                        <td>
                          <a class=" btn btn-sm btn-danger" style="color:white;">
                            <span> <?php echo e($d->status); ?></span>
                          </a>
                        </td>
                        <td>
                      <?php if($d->file==null): ?>
                        <a class="btn btn-sm btn-success" style="color:white;" target="_blank" data-toggle="modal" data-target="#importExcel">
                        <span class="fa fa-upload"></span>
                    </a>
                     <div class="modal fade" id="importExcel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <form method="post" action="<?php echo e(route('unggah', $d->id)); ?>" enctype="multipart/form-data">
                          <div class="modal-content2">
                            <div class="modal-header">
                              <h5 class="modall-title" id="exampleModalLabel">Unggah Bukti Pembayaran</h5>
                            </div>
                            <div class="modal-body">
                        
                              <?php echo e(csrf_field()); ?>

                        <br>
                              

    <div class="image-preview" id="imagePreview">
    <img src="" alt="Image Preview" class="image-preview__image">
        <span class="image-preview__default-text">
        +</span>
    </div>

    <?php if($errors->has('file')): ?>
     <span class="help-block3"><?php echo e($errors->first('file')); ?></span>
     <?php endif; ?>
     <br>
    <input type="file" name="file" id="inpFile">
    <label for="inpFile"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;
        Pilih foto
    </label>
 
<br>
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

                      <?php else: ?>
                      <p>Berhasil unggah bukti</p>
                      <?php endif; ?>
                 
                        </td>
                       


                        <td>
                          <a  href="<?php echo e(route('invoicePDF', $d->id)); ?>" target="_blank" class=" btn btn-sm btn-success" style="color:white;">
                            <span class="fa fa-download"></span>
                          </a>
                        </td>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
      <script src="<?php echo e(asset('/assets')); ?>/js/bootstrap.min.js"></script>
      <script src="<?php echo e(asset('/assets/js/toastr.min.js')); ?>"></script>
<script>
    <?php if(Session::has('success')): ?>
    toastr.success("<?php echo e(Session::get('success')); ?>")
    <?php endif; ?>
</script>
  <?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/murid/invoice.blade.php ENDPATH**/ ?>