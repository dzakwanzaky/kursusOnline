<?php echo $__env->make('base/header_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendaftaran Inofa Course</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/ material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>

    <div class="main">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <br>
            <div class="col-md-12 col-md-offset-1">
            <div class="card" style="display:block; margin-left:auto; margin-right:auto;">
              <div class="card-body">
             

                    <h2 class="form-title">Perhatian!</h2>
                    <div>
                        <a>
                            Informasi dan jadwal detail seleksi akan diinfokan melalui kontak anda.
                            Pastikan anda dapat selalu dihubungi. 
                        </a>
                        <br>
                        <br>
                        <a>
                        Salam Hangat, Inofa Course!
                        </a>
                    </div>
                    <br>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a class="btn btn-primary d-block" style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;" href="<?php echo e(route('tutor')); ?>">
                        OK
                    </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  
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
        $(document).ready(function(){
            $('#provinsi-select').change(function(){
                var provinsi_id = $(this).val();
                var provinsi_name = $("select[name='provinsi-select'] option:selected").text();  //add this
                if(provinsi_id){
                    $.ajax({
                        url: '/getKabupaten/' + provinsi_id,
                        type : 'GET',
                        dataType : 'json',
                        success: function(data){
                            $('#provinsi').empty();  //add this
                            $('#provinsi')
                                .append("<input type='text' style='display:none' name='provinsi' id='provinsi' value='"+provinsi_name+"'>");
                            console.log(data);
                            $('#kabupaten-select').empty();
                            $.each(data, function(key, value){
                                $('#kabupaten-select')
                                    .append('<option value="'+key+'">'+ value + '</option>');
                            });

                        }

                    });
                } else {
                    $('#kabupaten-select').empty();
                }
         });
         $('#kabupaten-select').change(function(){
                var kabupaten_id = $(this).val();
                var kabupaten_name = $("select[name='kabupaten-select'] option:selected").text();  //add this
                if(kabupaten_id){
                    $.ajax({
                        url: '/getKecamatan/' + kabupaten_id,
                        type : 'GET',
                        dataType : 'json',
                        success: function(data){
                            $('#kabupaten').empty();  //add this
                            $('#kabupaten')
                                .append("<input type='text' style='display:none' name='kabupaten' id='kabupaten' value='"+kabupaten_name+"'>");
                            console.log(data);
                            $('#kecamatan-select').empty();
                            $.each(data, function(key, value){
                                $('#kecamatan-select')
                                    .append('<option value="'+key+'">'+ value + '</option>');
                            });

                        }

                    });
                } else {
                    $('#kecamatan-select').empty();
                }
         });
         $('#kecamatan-select').change(function(){
                var kecamatan_name = $("select[name='kecamatan-select'] option:selected").text();  //add this
                            $('#kecamatan').empty();  //add this
                            $('#kecamatan')
                                .append("<input type='text' style='display:none' name='kecamatan' id='kecamatan' value='"+kecamatan_name+"'>");
                           
         });
$('#kelasSMP').hide();
$('#kelasSMA').hide();
$('#kelasSD').hide();
$('#matpelSD').hide();
$('#matpelSMP').hide();
$('#matpelSMA').hide();
    $(document).ready(function() {
        $("#program").change(function () {
     if ($(this).val() == "SD") {
        $('#kelasSD').show();
        $('#kelasSMP').hide();
        $('#kelasSMA').hide();
        $('#matpelSD').show();
        $('#matpelSMP').hide();
        $('#matpelSMA').hide();
     } else if ($(this).val() == "SMP") {
        $('#kelasSMP').show();
        $('#kelasSD').hide();
        $('#kelasSMA').hide();
        $('#matpelSMP').show();
        $('#matpelSD').hide();
        $('#matpelSMA').hide();
     } else if ($(this).val() == "SMA") {
        $('#kelasSMA').show();
        $('#kelasSD').hide();
        $('#kelasSMP').hide();
        $('#matpelSMA').show();
        $('#matpelSD').hide();
        $('#matpelSMP').hide()
      } else {
        $('#matpel').hide();
        $('#kelasSD').hide();
        $('#kelasSMP').hide();
        $('#kelasSMA').hide();
        $('#matpelSD').hide();
        $('#matpelSMP').hide();
        $('#matpelSMA').hide();
      }

        });
    });

        });
        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/base/informasiTutor.blade.php ENDPATH**/ ?>