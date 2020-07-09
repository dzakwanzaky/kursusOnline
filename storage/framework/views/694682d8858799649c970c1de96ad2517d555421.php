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

a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:35%;
    color:white;
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
            margin-left: 34px;
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
        
        .containerr {
            margin: 0 auto;
            margin-top: 35px;
            padding: 40px;
            width: 750px;
            height: auto;
            background-color: #fff;
             margin-bottom: 35px;
        }
          
   @media  screen and (width: 360px) {
        .containerr {
            margin-left: 10px;
            margin-top: 35px;
            padding: 40px;
            width: 340px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: -8px;
            width: 60px;
        }

        td,
        tr,
        th {
            padding: 3px;
            border: 1px solid #333;
            width: 15px;
            font-size: 16px;
        }

        th {
            background-color: #f0f0f0;
        }
          a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:16%;
    color:white;
}

    }
    @media  screen and (width: 375px) {
        .containerr {
            margin-left: 10px;
            margin-top: 35px;
            padding: 40px;
            width: 355px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 0px;
            width: 60px;
        }

        td,
        tr,
        th {
            padding: 3px;
            border: 1px solid #333;
            width: 15px;
            font-size: 16px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:18%;
    color:white;
}

    }

    @media  screen and (width: 320px) {
        .containerr {
            margin-left: 10px;
            margin-top: 35px;
            padding: 40px;
            width: 300px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: -18px;
            width: 50px;
        }

        td,
        tr,
        th {
            padding: 1px;
            border: 1px solid #333;
            width: 15px;
            font-size: 15px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:10%;
    color:white;
}

    }

     @media  screen and (width: 411px) {
        .containerr {
            margin-left: 10px;
            margin-top: 35px;
            padding: 40px;
            width: 390px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 15px;
            width: 60px;
        }

        td,
        tr,
        th {
            padding: 3px;
            border: 1px solid #333;
            width: 15px;
            font-size: 16px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:21%;
    color:white;
}

    }

    @media  screen and (width: 414px) {
        .containerr {
            margin-left: 10px;
            margin-top: 35px;
            padding: 40px;
            width: 392px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 17px;
            width: 60px;
        }

        td,
        tr,
        th {
            padding: 3px;
            border: 1px solid #333;
            width: 15px;
            font-size: 16px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:22%;
    color:white;
}

    }
 @media  screen and (width: 640px) {
        .containerr {
            margin-left: 40px;
            margin-top: 35px;
            padding: 40px;
            width: 563px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 2.1em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 4.8em;
            width: 280px;
        }

        td,
        tr,
        th {
            padding: 6px;
            border: 1px solid #333;
            width: 25px;
            font-size: 19px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:30%;
    color:white;
}

    }
     @media  screen and (width: 568px) {
        .containerr {
            margin-left: 40px;
            margin-top: 35px;
            padding: 40px;
            width: 490px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left:1.9em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 2.2em;
            width: 280px;
        }

        td,
        tr,
        th {
            padding: 6px;
            border: 1px solid #333;
            width: 25px;
            font-size: 19px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:25%;
    color:white;
}

    }

    @media  screen and (width: 731px) {
        .containerr {
            margin-left: 40px;
            margin-top: 35px;
            padding: 40px;
            width: 648px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1.6em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 6.2em;
            width: 320px;
        }

        td,
        tr,
        th {
            padding: 10px;
            border: 1px solid #333;
            width: 25px;
            font-size: 19px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:30%;
    color:white;
}

    }

    @media  screen and (width: 736px) {
        .containerr {
            margin-left: 40px;
            margin-top: 35px;
            padding: 40px;
            width: 648px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1.6em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 6.3em;
            width: 320px;
        }

        td,
        tr,
        th {
            padding: 10px;
            border: 1px solid #333;
            width: 25px;
            font-size: 19px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:32%;
    color:white;
}

    }
     @media  screen and (width: 812px) {
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 2.5em;
  
        }

     }

    @media  screen and (width: 667px) {
        .containerr {
            margin-left: 40px;
            margin-top: 35px;
            padding: 40px;
            width: 585px;
            height: auto;
            background-color: #fff;
        }
        .form {
            font-size: 23px;
            margin-left: 1.6em;
        }
        table {
            border: 1px solid #333;
            border-collapse: collapse;
            margin-left: 4.6em;
            width: 320px;
        }

        td,
        tr,
        th {
            padding: 10px;
            border: 1px solid #333;
            width: 25px;
            font-size: 19px;
        }

        th {
            background-color: #f0f0f0;
        }
        a.btn {
    background-color: #42a5f5;
    width: 180px; 
    border-radius:50px;
    margin-left:32%;
    color:white;
}

    }


    </style>
</head>

<body>
    <div class="containerr">
        <table>
            <h2 class="form">Detail Pembelian</h2>

            <thead>
                <tr>
                    <th colspan="2"><strong>#</strong>
                       
                        <?php echo e($invoice->invoice); ?>

                      </th>
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
                            
                            <?php echo e($invoice->siswa->kecamatan); ?>, <?php echo e($invoice->siswa->kabupaten); ?>, <?php echo e($invoice->siswa->provinsi); ?>

                           <br>
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
                       
                        <?php echo e($invoice->program->program); ?>

                    </td>
                    <td colspan="2">
                        <?php echo e($invoice->paket->nama_paket); ?>

                    </td>


                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="2">Total</th>
                    <td colspan="3">
                        <?php echo e($invoice->paket->harga); ?>



                    </td>
                    
                </tr>

            </tfoot>
        </table>
<br>
        <a type="button" class="btn" href="<?php echo e(route('paketProgram.update', $invoice->id)); ?>">
            Lanjutkan
        </a>

        </form>
    </div>
</body>

</html>
<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/base/invoiceDetail.blade.php ENDPATH**/ ?>