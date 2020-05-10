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

        .container {
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
    </style>
</head>

<body>
    <div class="containerr">
        <table>
        <caption>
                Inofa Course
            </caption>

            <thead>
                <tr>
                    <th colspan="4"><strong>#</strong>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php echo e($d->invoice); ?>

                        </th>
                    <th colspan="4">
                        <?php 
                    echo date("d-m-Y")
                    ?>
                    </th>
                    </th>
                </tr>
                <tr>
                    <td colspan="4">
                        <b>Bimbingan Belajar: </b>
                        <p>Inofa Course<br>
                            Jl Persatuan<br>
                            085343966997<br>
                            inofacourse.co.id
                        </p>
                    </td>
                    <td colspan="4">
                        <b>Pelanggan: </b>
                        <p><?php echo e($d->user->name); ?><br>
                        <?php echo e($d->siswa->kabupaten); ?> <?php echo e($d->siswa->kecamatan); ?> <?php echo e($d->siswa->provinsi); ?>

                            <br>
                            <?php echo e($d->user->phone); ?> <br>
                            <?php echo e($d->user->email); ?>


                        </p>
                    </td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th colspan="2">Program</th>
                    <th colspan="2">Paket</th>
                    <th colspan="4">Jumlah Sesi</th>
                </tr>
                <tr>
                    <td colspan="2">
                       
                        <?php echo e($d->program->program); ?>

                    </td>
                    <td colspan="2">
                    <?php echo e($d->jumlah_mapel); ?> Mata Pelajaran
                    </td>
                    <td colspan="4">
                    <?php echo e($d->jumlah_sesi); ?> Pertemuan Satu Minggu
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="4">Total</th>
                    <td colspan="4"> 
                    <?php echo e($d->harga); ?>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?></td>
                </tr>
                
            </tfoot>
        </table>
    </div>
</body>
</html><?php /**PATH C:\Users\ASUS\Pictures\bismilah\bismilah\resources\views/murid/invoicenya.blade.php ENDPATH**/ ?>