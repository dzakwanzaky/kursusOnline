<?php echo $__env->make('base/header_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', 'Calibri', 'Trebuchet MS', sans-serif;
            color: #333;
            text-align: left;
            font-size: 18px;
            margin: 0;
        }

        .containerr {
            margin: 0 auto;
            margin-top: 35px;
            padding: 40px;
            width: 750px;
            height: auto;
            background-color: #fff;
        }

        caption {
            font-size: 28px;
            margin-bottom: 15px;
            margin-right: 120px;
        }

        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin: 0 auto;
            margin-left: 20px;
            width: 600px;
        }

        td,
        tr,
        th {
            padding: 12px;
            border: 1px solid #333;
            width: 185px;
        }

        th {
            background-color: #f0f0f0;
        }

        h4,
        p {
            margin: 0px;
        }
        .form {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="containerr">
        <table>
            <h2 class="form">Detail Pemesanan</h2>

            <thead>
                <tr>
                    <th colspan="2"><strong>#</strong>
                        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($i->invoice); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></th>
                    <th colspan="3">
                        <?php 
                    echo date("d-m-Y")
                    ?>
                    </th>
                    </th>
                </tr>
                <tr>
                    <td colspan="2">
                        <b>Bimbingan Belajar: </b>
                        <p>Inofa Course<br>
                            Jl Persatuan<br>
                            085343966997<br>
                            inofacourse.co.id
                        </p>
                    </td>
                    <td colspan="3">
                        <b>Pelanggan: </b>
                        <p><?php echo e(Auth::user()->name); ?><br>
                            <?php $no = 1; ?>
                            <?php $__currentLoopData = $alamat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php echo e($a->kecamatan); ?>, <?php echo e($a->kabupaten); ?>, <?php echo e($a->provinsi); ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><br>
                            <?php echo e(Auth::user()->phone); ?> <br>
                            <?php echo e(Auth::user()->email); ?>

                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Program</th>
                    <th colspan="2">Paket</th>
                    
                </tr>
                <tr>
                    <td colspan="2">
                        <?php $no = 1; ?>
                        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($d->program->program); ?>

                    </td>
                    <td colspan="2">
                        <?php echo e($d->jumlah_mapel); ?>

                    </td>
                    
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <td colspan="3">
                        <?php
                    $sesi = $d["jumlah_sesi"];
                    $mapel =  $d["jumlah_mapel"];
                    $program = $d["program_id"];
                    $p1 = 20000;
                    $p2 = 30000;
                    $p3 = 40000;
                    $var = 0;
                    if ($program == '1'){
                        if ($mapel == 'Regular SD 1 Online' && $sesi == '1' ){
                            $var = "Rp. 300.000";
                        } else if ($mapel == 'Premium SD 1 Online' && $sesi == '1'){
                            $var = "Rp. 560.000";
                        } else if ($mapel == 'Pro SD 1 Online' && $sesi == '1'){
                            $var = "Rp. 780.000";
                        } else if ($mapel == 'Regular SD 2 Online' && $sesi == '2' ){
                                $var = "Rp. 576.000";
                        } else if ($mapel == 'Premium SD 2 Online' && $sesi == '2'){
                                $var = "Rp. 1.104.000";
                        } else if ($mapel == 'Pro SD 2 Online' && $sesi == '2'){
                                $var = "Rp. 1.536.000";
                        } else if ($mapel == 'Regular SD 1 Offline' && $sesi == '1' ){
                                $var = "Rp. 300.000";
                        } else if ($mapel == 'Premium SD 1 Offline' && $sesi == '1'){
                                $var = "Rp. 560.000";
                        } else if ($mapel == 'Pro SD 1 Offline' && $sesi == '1'){
                                $var = "Rp. 780.000";
                        } else if ($mapel == 'Regular SD 2 Offline' && $sesi == '2' ){
                                $var = "Rp. 576.000";
                        } else if ($mapel == 'Premium SD 2 Offline' && $sesi == '2'){
                                $var = "Rp. 1.104.000";
                        } else if ($mapel == 'Pro SD 2 Offline' && $sesi == '2'){
                                $var = "Rp. 1.536.000";
                        } else {
                            $var = 0;
                        }

                       

                    } else  if ($program == '2'){
                        if ($mapel == 'Regular SMP 1 Online' && $sesi == '1' ){
                            $var = "Rp. 640.000";
                        } else if ($mapel == 'Premium SMP 1 Online' && $sesi == '1'){
                            $var = "Rp. 900.000";
                        } else if ($mapel == 'Pro SMP 1 Online' && $sesi == '1'){
                            $var = "Rp. 1.120.000";
                        } else if ($mapel == 'Regular SMP 2 Online' && $sesi == '2'){
                            $var = "Rp. 1.200.000";
                        } else if ($mapel == 'Premium SMP 2 Online' && $sesi == '2' ){
                                $var = "Rp. 1.728.000";
                        } else if ($mapel == 'Pro SMP 2 Online' && $sesi == '2'){
                                $var = "Rp. 2.208.000";
                        } else if ($mapel == 'Regular SMP 1 Offline' && $sesi == '1' ){
                                $var = "Rp. 640.000";
                        } else if ($mapel == 'Premium SMP 1 Offline' && $sesi == '1'){
                                $var = "Rp. 900.000";
                        } else if ($mapel == 'Pro SMP 1 Offline' && $sesi == '1'){
                                $var = "Rp. 1.120.000";
                        } else if ($mapel == 'Regular SMP 2 Offline' && $sesi == '2'){
                                $var = "Rp. 1.200.000";
                        } else if ($mapel == 'Premium SMP 2 Offline' && $sesi == '2' ){
                                $var = "Rp. 1.728.000";
                        } else if ($mapel == 'Pro SMP 2 Offline' && $sesi == '2'){
                                $var = "Rp. 2.208.000";
                        } else {
                            $var = 0;
                        }
                    } else  if ($program == '3'){
                        if ($mapel == 'Regular SMA 1 Online' && $sesi == '1' ){
                            $var = "Rp. 640.000";
                        } else if ($mapel == 'Premium SMA 1 Online' && $sesi == '1'){
                            $var = "Rp. 900.000";
                        } else if ($mapel == 'Pro SMA 1 Online' && $sesi == '1'){
                            $var = "Rp. 1.120.000";
                        } else if ($mapel == 'Regular SMA 2 Online' && $sesi == '2'){
                            $var = "Rp. 1.200.000";
                        } else if ($mapel == 'Premium SMA 2 Online' && $sesi == '2' ){
                                $var = "Rp. 1.728.000";
                        } else if ($mapel == 'Pro SMA 2 Online' && $sesi == '2'){
                                $var = "Rp. 2.208.000";
                        } else if ($mapel == 'Regular SMA 1 Offline' && $sesi == '1' ){
                            $var = "Rp. 640.000";
                        } else if ($mapel == 'Premium SMA 1 Offline' && $sesi == '1'){
                            $var = "Rp. 900.000";
                        } else if ($mapel == 'Pro SMA 1 Offline' && $sesi == '1'){
                            $var = "Rp. 1.120.000";
                        } else if ($mapel == 'Regular SMA 2 Offline' && $sesi == '2'){
                            $var = "Rp. 1.200.000";
                        } else if ($mapel == 'Premium SMA 2 Offline' && $sesi == '2' ){
                                $var = "Rp. 1.728.000";
                        } else if ($mapel == 'Pro SMA 2 Offline' && $sesi == '2'){
                                $var = "Rp. 2.208.000";
                        
                        } else {
                            $var = 0;
                        }
                    } else {
                        $var = 0;
                    }
                    echo $var;
                    ?>

                    </td>

                </tr>

            </tfoot>
        </table>
        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <form action="<?php echo e(route('paketProgram.update', $i->id)); ?>" method="post" enctype="multipart/form-data">

        
            <?php echo e(csrf_field()); ?>

            <?php echo e(method_field('PUT')); ?>

            <input id="harga" value="<?php echo $var?>" type="text" class="form-control" name="harga" required autofocus
                style="display:none">
                <br>
            <button type="submit" class="btn btn-sm btn-primary" style="float:right">
                OK</button>
            
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </form>
    </div>
</body>

</html>
<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/base/invoiceDetail.blade.php ENDPATH**/ ?>