<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="<?php echo e(asset('/assets')); ?>/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
</head>

</html>
<style type="text/css">
    .rounded img {
        border-radius: 50em;
        border: .1px solid #9f9f9f;
    }
    hr.photo2 {
        width: 230px;

    }
    [type="file"] {
  height: 0;
  overflow: hidden;
  width: 0;
}

[type="file"] + label {
  background: #007bff;
  border-radius: 5px;
  color: #fff;
  font-weight: normal;
  font-size: 15px;
  margin-top: 10px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-right: 18px;
  padding-left: 18px;
}


    
</style>

<?php $__env->startSection('content'); ?>

<?php if(session('success')): ?>
<div class="alert alert-info" role="alert">
  <?php echo e(session('success')); ?>

</div>
<?php endif; ?>

<?php if(session('warning')): ?>
<div class="alert alert-warning" role="alert">
  <?php echo e(session('warning')); ?>

</div>
<?php endif; ?>
<!-- Content Wrapper. Contains page content -->
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-md-12 col-md-offset-6">
                <div class="box box-primary">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Edit Profil</h1>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
</div>
<!-- /.content-header -->
<!-- Main content -->
<?php $no = 1; ?>
<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<form action="<?php echo e(route('dataSiswa.update', $d->id)); ?>" method="post" enctype="multipart/form-data">
    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PUT')); ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <i class="fas fa-user mr-2"></i>Foto Profile

                            <hr class="photo">
                             <div class="rounded" >
                                <?php if($d->file==null): ?>
                                <img id="gambar" class="navbar-brand-full" src="<?php echo e(('/tema/images/user.png')); ?>"
                                    width="300px" alt="upload foto"
                                    width="180px" height="170px"
                                style="display:block; margin-left:auto; margin-right:auto;">
                                <?php else: ?>
                            <a href="<?php echo e(url('/data_file/'.$d->file)); ?>" target="_blank">
                                    <img id="gambar" width="180px" height="170px" src="<?php echo e(url('/data_file/'.$d->file)); ?>"
                                       style="display:block; margin-left:auto; margin-right:auto;">
                                </a>
                                <?php endif; ?>

                            </div>
                            <br>

                                          
                            <div style="text-align:center">
                                <label for="change_pic">Ganti Foto Profil</label>

                                <br>
                                <strong style=>Info!</strong> Maksimum ukuran foto : 2MB
                                <!-- <input id="foto" class="form-control" name="file" type="file"> --><br>
                                <input type="file" id="file" name="file" accept="image/*" />
                                <label for="file"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp;
                                Pilih foto Anda
                                </label>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="w-100 table-responsive-md">
                          

                                    <div class="form-group">
                                        <label id="prov" for="prov">Provinsi</label>

                                        <select class="form-control" id="provinsi-select" name="provinsi-select">
                                            <option value="<?php echo e($d->provinsi); ?>"><?php echo e($d->provinsi); ?></option>

                                            <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>

                                    <div name="provinsi" id="provinsi" value="<?php echo e($d->provinsi); ?>" style="display:none">
                                    <input type="text" name="provinsi" value="<?php echo e($d->provinsi); ?>">
                                    </div>

                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label for="kabkot">Kota/Kabupaten</label>
                                        </div>
                                        <select class="form-control" id="kabupaten-select" name="kabupaten-select" >
                                            <option value="<?php echo e($d->kabupaten); ?>"><?php echo e($d->kabupaten); ?></option>

                                        </select>
                                    </div>

                                    <div name="kabupaten" id="kabupaten" value="<?php echo e($d->kabupaten); ?>" style="display:none">
                                    <input type="text" name="kabupaten" value="<?php echo e($d->kabupaten); ?>">
                                    </div>


                                    <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label>Kecamatan</label>
                                        </div>
                                        <select class="form-control" id="kecamatan-select" name="kecamatan-select">
                                            <option value="<?php echo e($d->kecamatan); ?>"><?php echo e($d->kecamatan); ?></option>
                                        </select>
                                    </div>

                                    <div name="kecamatan" id="kecamatan" value="<?php echo e($d->kecamatan); ?>" style="display:none">
                                    <input type="text" name="kecamatan" value="<?php echo e($d->kecamatan); ?>">
                                    </div>


                                

                                        <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?php echo e($d->jenis_kelamin); ?>" selected="true" disabled="true"><?php echo e($d->jenis_kelamin); ?></option>
                                        <option value="Laki-Laki" <?php if($d->jenis_kelamin=="Laki-Laki"): ?> selected <?php endif; ?> >Laki-Laki</option>
                                        <option value="Perempuan" <?php if($d->jenis_kelamin=="Perempuan"): ?> selected <?php endif; ?> >Perempuan</option>
                                            
                                        </select>
                                    </div>


                                        <div class="form-group">
                                        <div class="input-group-prepend">
                                            <label for="kabkot">Tanggal Lahir</label>
                                        </div>
                                            <input class="form-control" id="tanggal" name="tanggal_lahir"
                                                placeholder="MM/DD/YYY" type="text" value="<?php echo e($d->tanggal_lahir); ?>">
                                     </div>


                                    <input type=" text" class="form-control" id="status" name="status"
                                        value=" <?php echo e($d->status); ?>" style="display:none">
                                </tbody>
                            </table>
                            <div class="form-group">
                            </div>
                            <td>
                                <button type="submit" class="btn btn-md btn-success">Simpan</button>
                                <a href="/profile" class="btn btn-md btn-danger">Batal</a>
                            </td>




                        </div>
</form>
<!-- /.col-md-6 -->
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
</div>

<!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('sweet'); ?>
<script>
    //buat profile
    $(function () {
        $("#file").change(function () {
            readURL(this);
        });
    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#gambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $(document).ready(function () {
        var date_input = $('input[name="tanggal_lahir"]'); //our date input has the name "date"
        var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() :
            "body";
        var options = {
            format: 'dd MM yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
        };
        date_input.datepicker(options);

 $('#provinsi-select').change(function () {
            var provinsi_id = $(this).val();
            var provinsi_name = $("select[name='provinsi-select'] option:selected").text(); //add this
            if (provinsi_id) {
                $.ajax({
                    url: '/getKabupaten/' + provinsi_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#provinsi').empty(); //add this
                        $('#provinsi')
                            .append(
                                "<input type='text' style='display:none' name='provinsi' id='provinsi' value='" +
                                provinsi_name + "'>");
                        console.log(data);
                        $('#kabupaten-select').empty();
                        $.each(data, function (key, value) {
                            $('#kabupaten-select')
                                .append('<option value="' + key + '">' + value +
                                    '</option>');
                        });

                    }

                });
            } else {
                $('#kabupaten-select').empty();
            }
        });
        $('#kabupaten-select').change(function () {
            var kabupaten_id = $(this).val();
            var kabupaten_name = $("select[name='kabupaten-select'] option:selected").text(); //add this
            if (kabupaten_id) {
                $.ajax({
                    url: '/getKecamatan/' + kabupaten_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function (data) {
                        $('#kabupaten').empty(); //add this
                        $('#kabupaten')
                            .append(
                                "<input type='text' style='display:none' name='kabupaten' id='kabupaten' value='" +
                                kabupaten_name + "'>");
                        console.log(data);
                        $('#kecamatan-select').empty();
                        $.each(data, function (key, value) {
                            $('#kecamatan-select')
                                .append('<option value="' + key + '">' + value +
                                    '</option>');
                        });

                    }

                });
            } else {
                $('#kecamatan-select').empty();
            }
        });
        $('#kecamatan-select').change(function () {
            var kecamatan_name = $("select[name='kecamatan-select'] option:selected").text(); //add this
            $('#kecamatan').empty(); //add this
            $('#kecamatan')
                .append(
                    "<input type='text' style='display:none' name='kecamatan' id='kecamatan' value='" +
                    kecamatan_name + "'>");

        });
    });
</script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      <script src="<?php echo e(asset('/assets')); ?>/js/bootstrap.min.js"></script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('murid/basee', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/editprofile.blade.php ENDPATH**/ ?>