<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#siswa" role="tab" data-toggle="tab">Biodata Siswa</a></li>
    <li><a href="#ortu" role="tab" data-toggle="tab">Biodata Orang Tua/Wali</a></li>
    <!--    <li><a href="#sekolah" role="tab" data-toggle="tab">Asal Sekolah</a></li>-->
    <li><a href="#un" role="tab" data-toggle="tab">Nilai UN SMP/MTs</a></li>
    <li><a href="#prestasi" role="tab" data-toggle="tab">Prestasi</a></li>
</ul>

<?= form_open('registration/do_register', array('class' => 'form-horizontal')); ?>
<div class="tab-content">
    <?= $this->session->flashdata('info'); ?>
    <div class="tab-pane tab-pane-content fade in active" id="siswa">
        <div class="form-group">
            <?= form_label('Program Keahlian', 'program-keahlian', array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-4">
                <?php
                $jurusan = array();
                foreach ($program_keahlian as $value)
                {
                    $jurusan[$value->id] = $value->program_keahlian;
                }
                echo form_dropdown('program_keahlian', $jurusan, null, 'class="form-control" id="program-keahlian"');
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Asal Sekolah', 'sekolah', array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-4">
                <?php
                $sekolah = array();
                foreach ($sekolahs as $value)
                {
                    $sekolah[$value->id] = $value->nama;
                }
                echo form_dropdown('sekolah', $sekolah, null, 'class="form-control" id="sekolah"');
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nama Lengkap', 'nama-siswa', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-5">
                <?=
                form_input(array(
                    'name' => 'nama',
                    'id' => 'nama-siswa',
                    'placeholder' => 'Nama Lengkap',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('NISN', 'nisn', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'nisn',
                    'id' => 'nisn',
                    'placeholder' => 'NISN',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Tempat Tanggal Lahir', 'ttl', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-4">
                <?=
                form_input(array(
                    'name' => 'tempat_lahir',
                    'id' => 'ttl',
                    'placeholder' => 'Tempat Lahir',
                    'class' => 'form-control')
                );
                ?>
            </div>
            <div class="col-sm-4">
                <?=
                form_input(array(
                    'name' => 'tgl_lahir',
                    'placeholder' => 'Tanggal Lahir',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Jenis Kelamin', null, array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <label class="radio-inline">
                    <?= form_radio('jenis_kelamin', 'L', true); ?> Laki-laki
                </label>
                <label class="radio-inline">
                    <?= form_radio('jenis_kelamin', 'P', false, 'id="perempuan"'); ?> Perempuan
                </label>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Agama', 'agama', array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-4">
                <?php
                $agama = array();
                foreach ($agamas as $value)
                {
                    $agama[$value->id] = $value->agama;
                }
                echo form_dropdown('agama', $agama, null, 'class="form-control" id="agama"');
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap', 'alamat-lengkap', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?=
                form_input(array(
                    'name' => 'alamat',
                    'id' => 'alamat-lengkap',
                    'placeholder' => 'Alamat Lengkap',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap di Jogja', 'alamat-lengkap-jogja', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?=
                form_input(array(
                    'name' => 'alamat_jogja',
                    'id' => 'alamat-lengkap-jogja',
                    'placeholder' => 'Alamat Lengkap di Jogja',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('No. Telepon', 'no-telp', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'no_telepon',
                    'id' => 'no_telp',
                    'placeholder' => 'No. telepon',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
    </div>

    <div class="tab-pane tab-pane-content fade" id="ortu">
        <div class="form-group">
            <?= form_label('Nama Lengkap', null, array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-5">
                <?=
                form_input(array(
                    'name' => 'ayah',
                    'placeholder' => 'Nama Lengkap Ayah',
                    'class' => 'form-control')
                );
                ?>
            </div>
            <div class="col-sm-5">
                <?=
                form_input(array(
                    'name' => 'ibu',
                    'placeholder' => 'Nama Lengkap Ibu',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap', 'alamat-ortu', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?=
                form_input(array(
                    'name' => 'alamat_ortu',
                    'id' => 'alamat-ortu',
                    'placeholder' => 'Alamat Lengkap',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Pekerjaan', null, array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-3">
                <?php
                $pekerjaan_ayah = array('0' => '-- Pekerjaan Ayah --');
                $pekerjaan_ibu = array('0' => '-- Pekerjaan Ibu --');
                foreach ($pekerjaans as $value)
                {
                    $pekerjaan_ayah[$value->id] = $value->pekerjaan;
                    $pekerjaan_ibu[$value->id] = $value->pekerjaan;
                }
                echo form_dropdown('pekerjaan_ayah', $pekerjaan_ayah, null, 'class="form-control"');
                ?>
            </div>
            <div class="col-sm-3"><?= form_dropdown('pekerjaan_ibu', $pekerjaan_ibu, null, 'class="form-control"'); ?></div>
        </div>
        <div class="form-group">
            <?= form_label('Nama Wali', 'wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?=
                form_input(array(
                    'name' => 'wali',
                    'id' => 'wali',
                    'placeholder' => 'Nama Wali',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Pekerjaan', null, array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-3">
                <?php
                $pekerjaan = array('0' => '-- Pekerjaan Wali --');
                foreach ($pekerjaans as $value)
                {
                    $pekerjaan[$value->id] = $value->pekerjaan;
                }
                echo form_dropdown('pekerjaan_wali', $pekerjaan, null, 'class="form-control"');
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap Wali', 'alamat-lengkap-wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-10">
                <?=
                form_input(array(
                    'name' => 'alamat_wali',
                    'id' => 'alamat-lengkap-wali',
                    'placeholder' => 'Alamat Lengkap Wali',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('No. Telepon Wali', 'no-telp-wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'no_telepon_wali',
                    'id' => 'no-telp-wali',
                    'placeholder' => 'No. telepon',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
    </div>

    <div class="tab-pane tab-pane-content fade" id="un">
        <?php foreach ($mapels as $value): ?>
            <div class="form-group">
                <?php
                switch ($value->id)
                {
                    case 1:
                        $form_label = form_label('Bahasa Indonesia', 'bhs-indo', array('class' => 'col-sm-2 control-label'));
                        $form_input = form_input(array(
                            'name' => 'bhs_indo',
                            'id' => 'bhs-indo',
                            'placeholder' => 'Bahasa Indonesia',
                            'class' => 'form-control')
                        );
                        break;
                    case 2:
                        $form_label = form_label('Bahasa Inggris', 'bhs-inggris', array('class' => 'col-sm-2 control-label'));
                        $form_input = form_input(array(
                            'name' => 'bhs_inggris',
                            'id' => 'bhs-inggris',
                            'placeholder' => 'Bahasa Inggris',
                            'class' => 'form-control')
                        );
                        break;
                    case 1:
                        $form_label = form_label('Matematika', 'matematika', array('class' => 'col-sm-2 control-label'));
                        $form_input = form_input(array(
                            'name' => 'matematika',
                            'id' => 'matematika',
                            'placeholder' => 'Bahasa Indonesia',
                            'class' => 'form-control')
                        );
                        break;
                    default:
                        break;
                }
                ?>
            </div>
        <?php endforeach; ?>
        <div class="form-group">
            <?= form_label('Bahasa Indonesia', 'bhs-indo', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'bhs_indo',
                    'id' => 'bhs-indo',
                    'placeholder' => 'Bahasa Indonesia',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Bahasa Inggris', 'bhs-inggris', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'bhs_inggris',
                    'id' => 'bhs-inggris',
                    'placeholder' => 'Bahasa Inggris',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Matematika', 'matematika', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'matematika',
                    'id' => 'matematika',
                    'placeholder' => 'Matematika',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('IPA', 'ipa', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'ipa',
                    'id' => 'ipa',
                    'placeholder' => 'IPA',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>

    </div>

    <div class="tab-pane tab-pane-content fade" id="prestasi">       
        <div class="form-group">
            <?= form_label('Prestasi 1', 'prestasi1', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?=
                form_input(array(
                    'name' => 'prestasi1',
                    'id' => 'prestasi1',
                    'placeholder' => 'Prestasi 1',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Prestasi 2', 'prestasi2', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?=
                form_input(array(
                    'name' => 'prestasi2',
                    'id' => 'prestasi2',
                    'placeholder' => 'Prestasi 2',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Prestasi 3', 'prestasi3', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?=
                form_input(array(
                    'name' => 'prestasi3',
                    'id' => 'prestasi3',
                    'placeholder' => 'Prestasi 3',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Prestasi 4', 'prestasi4', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-6">
                <?=
                form_input(array(
                    'name' => 'prestasi4',
                    'id' => 'prestasi4',
                    'placeholder' => 'Prestasi 4',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
        </div>
    </div>

</div>
<?= form_close(); ?>