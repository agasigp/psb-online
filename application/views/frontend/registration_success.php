<?php if (empty($siswa)): ?>
<h3>No pendaftaran <?= $no_pendaftaran ?> tidak ditemukan</h3>
<?php else: ?>
<h3>Data Calon Siswa Baru</h3>
<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#siswa" role="tab" data-toggle="tab">Biodata Siswa</a></li>
    <li><a href="#ortu" role="tab" data-toggle="tab">Biodata Orang Tua/Wali</a></li>
    <!--    <li><a href="#sekolah" role="tab" data-toggle="tab">Asal Sekolah</a></li>-->
    <li><a href="#un" role="tab" data-toggle="tab">Nilai UN SMP/MTs</a></li>
    <li><a href="#prestasi" role="tab" data-toggle="tab">Prestasi</a></li>
</ul>

<?= form_open(null, array('class' => 'form-horizontal')); ?>
<div class="tab-content">
    <?= $this->session->flashdata('info'); ?>
    <div class="tab-pane tab-pane-content fade in active" id="siswa">
        <div class="form-group">
            <?= form_label('No Pendaftaran', 'program-keahlian', array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-4">
                <p class="form-control-static"><?= $siswa->no_pendaftaran; ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Program Keahlian', 'program-keahlian', array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-4">
                <p class="form-control-static"><?= $siswa->program_keahlian; ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Asal Sekolah', 'sekolah', array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-4">
                <p class="form-control-static"><?= $siswa->sekolah; ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nama Lengkap', 'nama-siswa', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-5">
                <p class="form-control-static"><?= $siswa->nama; ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('NISN', 'nisn', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <p class="form-control-static"><?= $siswa->nisn; ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Tempat Tanggal Lahir', 'ttl', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-5">
                <p class="form-control-static"><?= $siswa->tempat_lahir.", ".$siswa->tgl_lahir; ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Jenis Kelamin', null, array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <p class="form-control-static"><?= $siswa->jenis_kelamin ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Agama', 'agama', array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-4">
                <p class="form-control-static"><?= $siswa->agama ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap', 'alamat-lengkap', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <p class="form-control-static"><?= $siswa->alamat ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap di Jogja', 'alamat-lengkap-jogja', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <p class="form-control-static"><?= $siswa->alamat_jogja ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('No. Telepon', 'no-telp', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <p class="form-control-static"><?= $siswa->no_telepon ?></p>
            </div>
        </div>
    </div>

    <div class="tab-pane tab-pane-content fade" id="ortu">
        <div class="form-group">
            <?= form_label('Nama Lengkap', null, array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-2">
                <p class="form-control-static"><?= $siswa->ayah ?></p>
            </div>
            <div class="col-sm-2">
                <p class="form-control-static"><?= $siswa->ibu ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap', 'alamat-ortu', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <p class="form-control-static"><?= $siswa->alamat_ortu ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Pekerjaan', null, array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-2">
                <p class="form-control-static"><?= $siswa->pekerjaan_ayah ?></p>
            </div>
            <div class="col-sm-2">
                <p class="form-control-static"><?= $siswa->pekerjaan_ayah ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nama Wali', 'wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <p class="form-control-static"><?= $siswa->wali ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Pekerjaan', null, array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-3">
                <p class="form-control-static"><?= $siswa->pekerjaan_wali ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap Wali', 'alamat-lengkap-wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <p class="form-control-static"><?= $siswa->alamat_wali ?></p>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('No. Telepon Wali', 'no-telp-wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <p class="form-control-static"><?= $siswa->no_telepon_wali ?></p>
            </div>
        </div>
    </div>

    <div class="tab-pane tab-pane-content fade" id="un">
        <?php foreach ($un as $value): ?>
            <div class="form-group">
                <?php
                $form_label = null;
                $nilai = null;
                switch ($value->id)
                {
                    case 1:
                        $form_label = form_label('Bahasa Indonesia', 'bhs-indo', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->nilai;
                        echo $form_label;
                        break;
                    case 2:
                        $form_label = form_label('Bahasa Inggris', 'bhs-inggris', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->nilai;
                        echo $form_label;
                        break;
                    case 3:
                        $form_label = form_label('Matematika', 'matematika', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->nilai;
                        echo $form_label;
                        break;
                    case 4:
                        $form_label = form_label('IPA', 'ipa', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->nilai;
                        echo $form_label;
                        break;
                    default:
                        break;
                }
                ?>
                <div class="col-sm-3">
                    <p class="form-control-static"><?= $nilai ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="tab-pane tab-pane-content fade" id="prestasi">
        <?php $i = 1; ?>
        <?php foreach ($prestasi as $value): ?>
            <div class="form-group">
                <?php
                $form_label = null;
                $nilai = null;

                switch ($i)
                {
                    case 1:
                        $form_label = form_label('Prestasi 1', 'prestasi1', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->prestasi;
                        echo $form_label;
                        break;
                    case 2:
                        $form_label = form_label('Prestasi 2', 'prestasi2', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->prestasi;
                        echo $form_label;
                        break;
                    case 3:
                        $form_label = form_label('Prestasi 3', 'prestasi3', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->prestasi;
                        echo $form_label;
                        break;
                    case 4:
                        $form_label = form_label('Prestasi 4', 'prestasi4', array('class' => 'col-sm-2 control-label'));
                        $nilai = $value->prestasi;
                        echo $form_label;
                        break;
                    default:
                        break;
                }

                $i++;
                ?>
                <div class="col-sm-3">
                    <p class="form-control-static"><?= $nilai ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= form_submit('save', 'Cetak', 'class="btn btn-default"') ?>
        </div>
    </div>

</div>
<?= form_close(); ?>
<?php endif; ?>