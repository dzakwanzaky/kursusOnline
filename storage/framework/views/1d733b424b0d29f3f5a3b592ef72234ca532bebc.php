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
                            <form method="POST" action="<?php echo e(route('dataTutor.store')); ?>" enctype="multipart/form-data">
                                <?php echo e(csrf_field()); ?>


                                <h2 class="form-title">Profile Tutor</h2>

                                <input id="id" value="<?php echo e(Auth::user()->id); ?>" type="text" class="form-control" name="id"
                                    required autofocus style="display:none">

                                <input id="nama_tutor" value="<?php echo e(Auth::user()->name); ?>" type="text" class="form-control"
                                    name="nama_tutor" required autofocus style="display:none">

                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label for="email">Jenis Kelamin</label>

                                    <div class="form-title" style="color:red">

                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control" required>
                                            <option value="">Jenis Kelamin</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>

                                    </div>
                                </div>

                                <?php if($errors->has('jenis_kelamin')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('jenis_kelamin')); ?>

                                </span>
                                <?php endif; ?>


                                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                                    <label class="control-label" for="tanggal">Tanggal Lahir</label>
                                    <div class="form-title">
                                        <input class="form-control" id="tanggal" name="tanggal_lahir"
                                            placeholder="MM/DD/YYY" type="text" required>
                                    </div>
                                </div>

                                <?php if($errors->has('tanggal_lahir')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('tanggal_lahir')); ?>

                                </span>
                                <?php endif; ?>

                                <div class="form-group">
                                    <label id="prov" for="prov">Provinsi</label>

                                    <select class="form-control" id="provinsi-select" name="provinsi-select" required>
                                        <option value="">Provinsi</option>

                                        <?php $__currentLoopData = $provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <?php if($errors->has('provinsi')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('provinsi')); ?>

                                </span>
                                <?php endif; ?>


                                <div name="provinsi" id="provinsi"></div>


                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label for="kabkot">Kota/Kabupaten</label>
                                    </div>
                                    <select class="form-control" id="kabupaten-select" name="kabupaten-select" required>
                                        <option>Kota/Kabupaten</option>
                                    </select>
                                </div>

                                <?php if($errors->has('kabupaten')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('kabupaten')); ?>

                                </span>
                                <?php endif; ?>


                                <div name="kabupaten" id="kabupaten"></div>


                                <div class="form-group">
                                    <div class="input-group-prepend">
                                        <label>Kecamatan</label>
                                    </div>
                                    <select class="form-control" id="kecamatan-select" name="kecamatan-select" required>
                                        <option>Kecamatan</option>
                                    </select>
                                </div>

                                <?php if($errors->has('kecamatan')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('kecamatan')); ?>

                                </span>
                                <?php endif; ?>

                                <div name="kecamatan" id="kecamatan"></div>


                                <div class="form-group">
                                    <label for="alamat_detail">Alamat Detail</label>
                                    <div class="form-title">
                                        <textarea id="alamat_detail" type="text" class="form-control"
                                            name="alamat_detail" rows="3"
                                            placeholder="Masukkan petunjuk arah atau alamat detail" required></textarea>
                                    </div>
                                </div>

                                <?php if($errors->has('alamat_detail')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('alamat_detail')); ?>

                                </span>
                                <?php endif; ?>

                                <div class="form-group<?php echo e($errors->has('provinsi') ? ' has-error' : ''); ?>">
                                    <label for="pendidikan">Pendidikan Terakhir</label>

                                    <div class="form-title">
                                        <select id="pendidikan" name="pendidikan" class="form-control" required>
                                            <option value="SMA">SMA/SMK sederajat</option>
                                            <option value="D3">D3</option>
                                            <option value="S1">S1</option>
                                            <option value="S2">S2</option>
                                        </select>
                                    </div>
                                </div>

                                <?php if($errors->has('pendidikan')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('pendidikan')); ?>

                                </span>
                                <?php endif; ?>


                                <div class="form-group" name="jumlah">
                                    <label for="progran">Jumlah Program</label>

                                    <div class="form-title">

                                        <select id="jumlah" name="jumlah" class="form-control" required>
                                            <option value="">Pilih Jumlah Program Yang Ingin Diajar</option>
                                            <option value="1">1 Program</option>
                                            <option value="2">2 Program</option>
                                            <option value="3">3 Program</option>
                                        </select>

                                    </div>
                                </div>

                                <div id="jumlah-1">
                                    <div class="alert alert-primary">
                                        Masukkan detail untuk Pilihan Program 1!
                                    </div>
                                    <div class="form-group" name="program">
                                        <label for="progran">Program Yang Ingin Diajar</label>

                                        <div class="form-title">

                                            <select id="program" name="program_id[]" class="form-control" required>
                                                <option value="">Pilih Program</option>
                                                <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($d->id); ?>"><?php echo e($d->program); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSD" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SD<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSMP" name="kelasSMP" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksmp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SMP<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSMA" name="kelasSMA" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SMA<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSD" name="matpelSD" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSMP" name="matpelSMP" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSMA" name="matpelSMA" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="sbm" name="sbm" required>
                                        <label for="mata_pelajaran">Jenis Ujian</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sbm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                </div>

                                <div id="jumlah-2">
                                    <div class="alert alert-primary">
                                        Masukkan detail untuk Pilihan Program 2!
                                    </div>
                                    <div class="form-group" name="program-2>
                                    <label for=" progran">Program Yang Ingin Diajar</label>

                                        <div class="form-title">

                                            <select id="program-2" name="program_id[]" class="form-control" required>
                                                <option value="">Pilih Program</option>
                                                <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($d->id); ?>"><?php echo e($d->program); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSD-2" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SD<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSMP-2" name="kelasSMP-2" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksmp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SMP<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSMA-2" name="kelasSMA-2" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SMA<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSD-2" name="matpelSD-2" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSMP-2" name="matpelSMP-2" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSMA-2" name="matpelSMA-2" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="sbm-2" name="sbm-2" required>
                                        <label for="mata_pelajaran">Jenis Ujian</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sbm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                </div>

                                <div id="jumlah-3">
                                    <div class="alert alert-primary">
                                        Masukkan detail untuk Pilihan Program 3!
                                    </div>
                                    <div class="form-group" name="program-3">
                                        <label for="progran">Program Yang Ingin Diajar</label>

                                        <div class="form-title">

                                            <select id="program-3" name="program_id[]" class="form-control" required>
                                                <option value="">Pilih Program</option>
                                                <?php $__currentLoopData = $program; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($d->id); ?>"><?php echo e($d->program); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSD-3" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SD<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSMP-3" name="kelasSMP-3" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksmp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SMP<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="kelasSMA-3" name="kelasSMA-3" required>
                                        <label for="kelas">Preferensi Jenjang Kelas Yang Akan Diajar</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $ksma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="kelas_id" type="checkbox" name="kelas_id[]"
                                                value="<?php echo e($d->id); ?>" />
                                            <?php echo e($d->kelas); ?> SMA<br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSD-3" name="matpelSD-3" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sd; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSMP-3" name="matpelSMP-3" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $smp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="matpelSMA-3" name="matpelSMA-3" required>
                                        <label for="mata_pelajaran">Mata Pelajaran</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sma; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                    <div class="form-group" id="sbm-3" name="sbm-3" required>
                                        <label for="mata_pelajaran">Jenis Ujian</label>
                                        <div class="form-round">
                                            <?php $__currentLoopData = $sbm; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <input id="mata_pelajaran" name="mapel_id[]" type="checkbox"
                                                value="<?php echo e($d->id); ?>" /> <?php echo e($d->mapel); ?> <br>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group<?php echo e($errors->has('file') ? ' has-error' : ''); ?>">
                                    <label for="file">Curriculum Vitae (.pdf / .docx)</label>
                                    <div class="form-title">
                                        <input id="file" accept=".docx, .pdf" type="file" class="form-control"
                                            name="file" required>

                                    </div>
                                </div>

                                <?php if($errors->has('file')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('file')); ?>

                                </span>
                                <?php endif; ?>

                                <div class="form-group<?php echo e($errors->has('foto') ? ' has-error' : ''); ?>">
                                    <label for="foto">Foto Diri</label>
                                    <div class="form-title">
                                        <input id="foto" accept=".jpg, .png, .jpeg" type="file" class="form-control"
                                            name="foto" required>

                                    </div>
                                </div>

                                <?php if($errors->has('foto')): ?>
                                <span class="help-block" style="color:red">
                                    <?php echo e($errors->first('foto')); ?>

                                </span>
                                <?php endif; ?>

                                <input id="status" type="text" name="status" class="form-control" value="MENUNGGU"
                                    style="display:none" required>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary d-block"
                                        style="width: 180px; border-radius:50px; margin-left:auto; margin-right:auto;">
                                        Save
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
        $('#jumlah-1').hide();
        $('#jumlah-2').hide();
        $('#jumlah-3').hide();
        $('#kelasSMP').hide();
        $('#kelasSMA').hide();
        $('#kelasSD').hide();
        $('#matpelSD').hide();
        $('#matpelSMP').hide();
        $('#matpelSMA').hide();
        $('#sbm').hide();
        $('#kelasSMP-2').hide();
        $('#kelasSMA-2').hide();
        $('#kelasSD-2').hide();
        $('#matpelSD-2').hide();
        $('#matpelSMP-2').hide();
        $('#matpelSMA-2').hide();
        $('#sbm-2').hide();
        $('#kelasSMP-3').hide();
        $('#kelasSMA-3').hide();
        $('#kelasSD-3').hide();
        $('#matpelSD-3').hide();
        $('#matpelSMP-3').hide();
        $('#matpelSMA-3').hide();
        $('#sbm-3').hide();
        $(document).ready(function () {
            $("#jumlah").change(function () {
                if ($(this).val() == "1") {
                    $('#jumlah-1').show().find('input, textarea, select').prop('disabled',
                        false);
                    $('#jumlah-2').hide().find('input, textarea, select').prop('disabled',
                    true);
                    $('#jumlah-3').hide().find('input, textarea, select').prop('disabled',
                    true);
                } else if ($(this).val() == "2") {
                    $('#jumlah-1').show().find('input, textarea, select').prop('disabled',
                        false);
                    $('#jumlah-2').show().find('input, textarea, select').prop('disabled',
                        false);
                    $('#jumlah-3').hide().find('input, textarea, select').prop('disabled',
                    true);
                } else if ($(this).val() == "3") {
                    $('#jumlah-1').show().find('input, textarea, select').prop('disabled',
                        false);
                    $('#jumlah-2').show().find('input, textarea, select').prop('disabled',
                        false);
                    $('#jumlah-3').show().find('input, textarea, select').prop('disabled',
                        false);
                } else {
                    $('#jumlah-1').hide().find('input, textarea, select').prop('disabled',
                    true);
                    $('#jumlah-2').hide().find('input, textarea, select').prop('disabled',
                    true);
                    $('#jumlah-3').hide().find('input, textarea, select').prop('disabled',
                    true);
                }
            });

            $("#program").change(function () {
                if ($(this).val() == "1") {
                    $('#kelasSD').show();
                    $('#kelasSMP').hide();
                    $('#kelasSMA').hide();
                    $('#matpelSD').show();
                    $('#matpelSMP').hide();
                    $('#matpelSMA').hide();
                    $('#sbm').hide();
                } else if ($(this).val() == "2") {
                    $('#kelasSMP').show();
                    $('#kelasSD').hide();
                    $('#kelasSMA').hide();
                    $('#matpelSMP').show();
                    $('#matpelSD').hide();
                    $('#matpelSMA').hide();
                    $('#sbm').hide();
                } else if ($(this).val() == "3") {
                    $('#kelasSMA').show();
                    $('#kelasSD').hide();
                    $('#kelasSMP').hide();
                    $('#matpelSMA').show();
                    $('#matpelSD').hide();
                    $('#matpelSMP').hide()
                    $('#sbm').hide();
                } else if ($(this).val() == "4") {
                    $('#kelasSMA').hide();
                    $('#kelasSD').hide();
                    $('#kelasSMP').hide();
                    $('#matpelSMA').hide();
                    $('#matpelSD').hide();
                    $('#matpelSMP').hide()
                    $('#sbm').show();
                } else {
                    $('#matpel').hide();
                    $('#kelasSD').hide();
                    $('#kelasSMP').hide();
                    $('#kelasSMA').hide();
                    $('#matpelSD').hide();
                    $('#matpelSMP').hide();
                    $('#matpelSMA').hide();
                    $('#sbm').hide();
                }

            });
            $("#program-2").change(function () {
                if ($(this).val() == "1") {
                    $('#kelasSD-2').show();
                    $('#kelasSMP-2').hide();
                    $('#kelasSMA-2').hide();
                    $('#matpelSD-2').show();
                    $('#matpelSMP-2').hide();
                    $('#matpelSMA-2').hide();
                    $('#sbm-2').hide();
                } else if ($(this).val() == "2") {
                    $('#kelasSMP-2').show();
                    $('#kelasSD-2').hide();
                    $('#kelasSMA-2').hide();
                    $('#matpelSMP-2').show();
                    $('#matpelSD-2').hide();
                    $('#matpelSMA-2').hide();
                    $('#sbm-2').hide();
                } else if ($(this).val() == "3") {
                    $('#kelasSMA-2').show();
                    $('#kelasSD-2').hide();
                    $('#kelasSMP-2').hide();
                    $('#matpelSMA-2').show();
                    $('#matpelSD-2').hide();
                    $('#matpelSMP-2').hide()
                    $('#sbm-2').hide();
                } else if ($(this).val() == "4") {
                    $('#kelasSMA-2').hide();
                    $('#kelasSD-2').hide();
                    $('#kelasSMP-2').hide();
                    $('#matpelSMA-2').hide();
                    $('#matpelSD-2').hide();
                    $('#matpelSMP-2').hide()
                    $('#sbm-2').show();
                } else {
                    $('#matpel-2').hide();
                    $('#kelasSD-2').hide();
                    $('#kelasSMP-2').hide();
                    $('#kelasSMA-2').hide();
                    $('#matpelSD-2').hide();
                    $('#matpelSMP-2').hide();
                    $('#matpelSMA-2').hide();
                    $('#sbm-2').hide();
                }

            });
            $("#program-3").change(function () {
                if ($(this).val() == "1") {
                    $('#kelasSD-3').show();
                    $('#kelasSMP-3').hide();
                    $('#kelasSMA-3').hide();
                    $('#matpelSD-3').show();
                    $('#matpelSMP-3').hide();
                    $('#matpelSMA-3').hide();
                    $('#sbm-3').hide();
                } else if ($(this).val() == "2") {
                    $('#kelasSMP-3').show();
                    $('#kelasSD-3').hide();
                    $('#kelasSMA-3').hide();
                    $('#matpelSMP-3').show();
                    $('#matpelSD-3').hide();
                    $('#matpelSMA-3').hide();
                    $('#sbm-3').hide();
                } else if ($(this).val() == "3") {
                    $('#kelasSMA-3').show();
                    $('#kelasSD-3').hide();
                    $('#kelasSMP-3').hide();
                    $('#matpelSMA-3').show();
                    $('#matpelSD-3').hide();
                    $('#matpelSMP-3').hide()
                    $('#sbm-3').hide();
                } else if ($(this).val() == "4") {
                    $('#kelasSMA-3').hide();
                    $('#kelasSD-3').hide();
                    $('#kelasSMP-3').hide();
                    $('#matpelSMA-3').hide();
                    $('#matpelSD-3').hide();
                    $('#matpelSMP-3').hide()
                    $('#sbm-3').show();
                } else {
                    $('#matpel-3').hide();
                    $('#kelasSD-3').hide();
                    $('#kelasSMP-3').hide();
                    $('#kelasSMA-3').hide();
                    $('#matpelSD-3').hide();
                    $('#matpelSMP-3').hide();
                    $('#matpelSMA-3').hide();
                    $('#sbm-3').hide();
                }

            });
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base/script_page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ini TA GUE\PROJEK\PROJEK\resources\views/base/dataTutor.blade.php ENDPATH**/ ?>