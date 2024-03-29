<?php echo $__env->make('base/header_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<style type="text/css">
    .form {
        margin-left: 4.5em;
    
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;

    }
    .help-block3 {
        color: red;
        font-size: 14px;
        margin-left: 3px;
     
    }
    label {
        font-size: 17px;
    }

        @media  screen and (width: 375px) {
        .form {
        margin-left: 0em;
        width: 13em;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    @media  screen and (width: 414px) {
        .form {
        margin-left: 0.5em;
        width: 13em;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    @media  screen and (width: 411px) {
        .form {
        margin-left: 0.5em;
        width: 12em;
        font-size: 22px;
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    @media  screen and (width: 320px) {
        .form {
        margin-left: -0.7em;
        width: 12em;
      
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 17px;
    }
    }
 @media  screen and (width: 360px) {
        .form {
        margin-left: -0.4em;
        width: 12em;
   
            font-family: "Muli", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            font-size: 20px;
    }
    }
    .help-block {
        color: red;
    }

    .has-error {
        color: red;
    }

    #custom-button {
        padding-left: 10px;
        padding-right: 10px;
        padding-top: 7px;
        padding-bottom: 7px;
        color: white;
        background-color: #2b91ff;
        border: 1px solid #fff;
        border-radius: 5px;
        cursor: pointer;
    }
     #custom-button:focus {
 color: #ffffff;
 outline:0;box-shadow:0 0 0 .2rem rgba(0,123,255,.25)
}
    }

    #custom-button:hover {
        opacity: 80%;
    }

    #custom-text {
        margin-left: 10px;
        font-family: sans-serif;
        color: #aaa;
    }
</style>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Inofa Course</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="set('/ya')}}/assets/css/style.css">


</head>

<div class="main">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <br>
                <div class="col-md-12 col-md-offset-1">
                    <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
                        <div class="card-body">
                            <form method="POST" action="<?php echo e(route('dataSiswa.store')); ?>" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>


                                <h2 class="form">Lengkapi Profil Siswa</h2>

                                <input id="id" value="<?php echo e(Auth::user()->id); ?>" type="text" class="form-control" name="id"
                                    required autofocus style="display:none">

                                <input id="nama_siswa" value="<?php echo e(Auth::user()->name); ?>" type="text" class="form-control"
                                    name="nama_siswa" required autofocus style="display:none">


                                <label for="email">Jenis Kelamin</label>
                                <div class="form-group<?php echo e($errors->has('jenis_kelamin') ? ' has-error' : ''); ?>">
                                    <div class="form-title">

                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                            <option value="0" disabled="true" selected="true">Jenis Kelamin</option>
                                            <option value="Laki-Laki"
                                                <?php echo e((old('jenis_kelamin') == 'Laki-Laki ') ? ' selected' : ''); ?>>Laki-Laki
                                            </option>
                                            <option value="Perempuan"
                                                <?php echo e((old('jenis_kelamin') == 'Perempuan') ? ' selected' : ''); ?>>Perempuan
                                            </option>
                                        </select>

                                    </div>
                                    <?php if($errors->has('jenis_kelamin')): ?>
                                    <span class="help-block">
                                        <?php echo e($errors->first('jenis_kelamin')); ?>

                                    </span>
                                    <?php endif; ?>
                                </div>


                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                <div class="form-group<?php echo e($errors->has('tanggal_lahir') ? ' has-error' : ''); ?>">
                                    <div class="form-title">
                                        <input class="form-control" id="tanggal" name="tanggal_lahir"
                                            placeholder="Tanggal lahir" type="text" value="<?php echo e(old('tanggal_lahir')); ?>">

                                    </div>
                                    <?php if($errors->has('tanggal_lahir')): ?>
                                    <span class="help-block">
                                        <?php echo e($errors->first('tanggal_lahir')); ?>

                                    </span>
                                    <?php endif; ?>
                                </div>


                                <label id="prov" for="prov">Provinsi</label>
                                <div class="form-group<?php echo e($errors->has('provinsi') ? ' has-error' : ''); ?>">

                                    <select class="form-control" id="provinsi-select" name="provinsi-select">
                                        <option value="">Provinsi</option>
                                        <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                    <?php if($errors->has('provinsi')): ?>
                                    <span class="help-block">
                                        <?php echo e($errors->first('provinsi')); ?>

                                    </span>
                                    <?php endif; ?>

                                </div>

                                <div name="provinsi" id="provinsi"></div>



                                <div class="input-group-prepend">
                                    <label for="kabkot">Kota/Kabupaten</label>
                                </div>
                                <div class="form-group<?php echo e($errors->has('kabupaten') ? ' has-error' : ''); ?>">
                                    <select class="form-control" id="kabupaten-select" name="kabupaten-select" >
                                        <option>Kota/Kabupaten</option>
                                    </select>
                                    <?php if($errors->has('kabupaten')): ?>
                                    <span class="help-block">
                                        <?php echo e($errors->first('kabupaten')); ?>

                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div name="kabupaten" id="kabupaten"></div>



                                <div class="input-group-prepend">
                                    <label>Kecamatan</label>
                                </div>
                                <div class="form-group<?php echo e($errors->has('kecamatan') ? ' has-error' : ''); ?>">
                                    <select class="form-control" id="kecamatan-select" name="kecamatan-select" >
                                        <option>Kecamatan</option>
                                    </select>
                                    <?php if($errors->has('kecamatan')): ?>
                                    <span class="help-block">
                                        <?php echo e($errors->first('kecamatan')); ?>

                                    </span>
                                    <?php endif; ?>
                                </div>

                                <div name="kecamatan" id="kecamatan"></div>


                                <div class="form-group">
                                    <label for="alamat_detail">Alamat Detail</label>
                                    <div class="form-group<?php echo e($errors->has('alamat_detail') ? ' has-error' : ''); ?>">
                                        <div class="form-title">
                                            <textarea id="alamat_detail" type="text" class="form-control"
                                                name="alamat_detail" rows="3"
                                                placeholder="Petunjuk arah atau alamat detail untuk menuju alamat rumah"><?php echo e(old('alamat_detail')); ?></textarea>
                                        </div>
                                        <?php if($errors->has('alamat_detail')): ?>
                                        <span class="help-block">
                                            <?php echo e($errors->first('alamat_detail')); ?>

                                        </span>
                                        <?php endif; ?>
                                    </div>


                                    <br>
                                    <div class="panel-body">
                                        <div class="alert alert-danger">
                                            <strong>Info!</strong> Ukuran foto maksimal : 2MB
                                        </div>
                                        Foto Diri
                                        <div class="form-group">


                                            <input type="file" id="real-file" hidden="hidden" name="file">
                                            <button type="button" id="custom-button">&nbsp;Foto&nbsp;Anda</button>
                                            <span id="custom-text">Tidak ada foto yang dipilih</span>
                                            <br>
                                            <?php if($errors->has('file')): ?>
                                            <span class="help-block3"><?php echo e($errors->first('file')); ?></span>
                                        <?php endif; ?>

                                        </div>

                                        <input id="status" type="text" name="status" class="form-control"
                                            value="BELUM AKTIF" style="display:none" required>
                                        <br>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary d-block"
                                                style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;">
                                                Simpan
                                            </button>
                                        </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php $__env->startSection('day'); ?>
<script>
    // $('#kabupaten').hide();
    $(document).ready(function () {
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


        })
    });
</script>
<script>
    const realFileBtn = document.getElementById("real-file");
    const customBtn = document.getElementById("custom-button");
    const customTxt = document.getElementById("custom-text");

    customBtn.addEventListener("click", function () {
        realFileBtn.click();
    });

    realFileBtn.addEventListener("change", function () {
        if (realFileBtn.value) {
            customTxt.innerHTML = realFileBtn.value.match(
                /[\/\\]([\w\d\s\.\-\(\)]+)$/
            )[1];
        } else {
            customTxt.innerHTML = "Tidak ada foto yang dipilih";
        }
    });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/base/dataSiswa.blade.php ENDPATH**/ ?>