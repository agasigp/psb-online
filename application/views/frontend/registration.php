<h3>Pendaftaran Calon Siswa Baru</h3>
<ul class="nav nav-tabs" role="tablist">
    <li class="active"><a href="#siswa" role="tab" data-toggle="tab">Biodata Siswa</a></li>
    <li><a href="#ortu" role="tab" data-toggle="tab">Biodata Orang Tua/Wali</a></li>
    <li><a href="#un" role="tab" data-toggle="tab">Nilai UN SMP/MTs</a></li>
    <li><a href="#prestasi" role="tab" data-toggle="tab">Prestasi</a></li>
</ul>

<?= form_open('registration/do_registration', array('class' => 'form-horizontal')); ?>
<div class="tab-content">
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
        <div class="form-group" id="sekolah_lain">
            <?= form_label('Asal Sekolah', 'ttl', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'asal_sekolah',
                    'required' => null,
                    'placeholder' => 'Sekolah Asal',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-2">
                <?=
                form_input(array(
                    'name' => 'npsn',
                    'placeholder' => 'NPSN',
                    'required' => null,
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_sekolah',
                    'placeholder' => 'Alamat Sekolah',
                    'required' => null,
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-2">
                <?=
                form_input(array(
                    'name' => 'status_sekolah',
                    'placeholder' => 'Status',
                    'required' => null,
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
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
                    'required' => null,
                    'placeholder' => 'Nama Lengkap',
                    'class' => 'form-control',
                    'data-validation' => 'required')
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
                    'required' => null,
                    'placeholder' => 'NISN',
                    'class' => 'form-control',
                    'data-validation' => 'number')
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
                    'required' => null,
                    'placeholder' => 'Tempat Lahir',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-4">
                <?=
                form_input(array(
                    'name' => 'tgl_lahir',
                    'placeholder' => 'Tanggal Lahir',
                    'type' => 'date',
                    'required' => null,
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
                <?=
                form_input(array(
                    'name' => 'agama',
                    'value' => 'Islam',
                    'disabled' => 'disabled',
                    'class' => 'form-control')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap', 'alamat-lengkap', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat',
                    'id' => 'alamat-lengkap',
                    'required' => null,
                    'placeholder' => 'Alamat Lengkap',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_kelurahan',
                    'id' => 'alamat-kelurahan',
                    'required' => null,
                    'placeholder' => 'Alamat Kelurahan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_kecamatan',
                    'id' => 'alamat-kecamatan',
                    'required' => null,
                    'placeholder' => 'Alamat Kecamatan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <?=
                form_input(array(
                    'name' => 'alamat_kabupaten',
                    'id' => 'alamat-kabupaten',
                    'required' => null,
                    'placeholder' => 'Alamat Kabpuaten/Kota',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-5">
                <?=
                form_input(array(
                    'name' => 'alamat_provinsi',
                    'id' => 'alamat-provinsi',
                    'required' => null,
                    'placeholder' => 'Alamat Provinsi',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>

        <div class="form-group">
            <?= form_label('Alamat Lengkap Jogja', 'alamat-lengkap-jogja', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_jogja',
                    'id' => 'alamat-lengkap-jogja',
                    'required' => null,
                    'placeholder' => 'Alamat Lengkap Jogja',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_jogja_kelurahan',
                    'id' => 'alamat-kelurahan',
                    'required' => null,
                    'placeholder' => 'Alamat Kelurahan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_jogja_kecamatan',
                    'id' => 'alamat-kecamatan',
                    'required' => null,
                    'placeholder' => 'Alamat Kecamatan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <?=
                form_input(array(
                    'name' => 'alamat_jogja_kabupaten',
                    'id' => 'alamat-kabupaten',
                    'required' => null,
                    'placeholder' => 'Alamat Kabpuaten/Kota',
                    'class' => 'form-control',
                    'data-validation' => 'required')
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
                    'required' => null,
                    'placeholder' => 'No. telepon',
                    'class' => 'form-control',
                    'data-validation' => 'number')
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
                    'required' => null,
                    'placeholder' => 'Nama Lengkap Ayah',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-5">
                <?=
                form_input(array(
                    'name' => 'ibu',
                    'required' => null,
                    'placeholder' => 'Nama Lengkap Ibu',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap', 'alamat-ortu', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_ortu',
                    'id' => 'alamat-ortu',
                    'required' => null,
                    'placeholder' => 'Alamat Lengkap',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_kelurahan_ortu',
                    'id' => 'alamat-kelurahan',
                    'required' => null,
                    'placeholder' => 'Alamat Kelurahan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_kecamatan_ortu',
                    'id' => 'alamat-kecamatan',
                    'required' => null,
                    'placeholder' => 'Alamat Kecamatan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <?=
                form_input(array(
                    'name' => 'alamat_kabupaten_ortu',
                    'id' => 'alamat-kabupaten',
                    'required' => null,
                    'placeholder' => 'Alamat Kabpuaten/Kota',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-5">
                <?=
                form_input(array(
                    'name' => 'alamat_provinsi_ortu',
                    'id' => 'alamat-provinsi',
                    'required' => null,
                    'placeholder' => 'Alamat Provinsi',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Pekerjaan', null, array('class' => 'col-sm-2 control-label')) ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'pekerjaan_ayah',
                    'id' => 'pekerjaan-ayah',
                    'required' => null,
                    'placeholder' => 'Pekerjaan Ayah',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'pekerjaan_ibu',
                    'id' => 'pekerjaan-ibu',
                    'required' => null,
                    'placeholder' => 'Pekerjaan Ibu',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Nama Wali', 'wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'wali',
                    'id' => 'wali',
                    'required' => null,
                    'placeholder' => 'Nama Wali',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'pekerjaan_wali',
                    'id' => 'pekerjaan-wali',
                    'required' => null,
                    'placeholder' => 'Pekerjaan Wali',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <?= form_label('Alamat Lengkap Wali', 'alamat-lengkap-wali', array('class' => 'col-sm-2 control-label')); ?>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_wali',
                    'id' => 'alamat-lengkap-wali',
                    'required' => null,
                    'placeholder' => 'Alamat Lengkap Wali',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_kelurahan_wali',
                    'id' => 'alamat-kelurahan-wali',
                    'required' => null,
                    'placeholder' => 'Alamat Kelurahan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-3">
                <?=
                form_input(array(
                    'name' => 'alamat_kecamatan_wali',
                    'id' => 'alamat-kecamatan-wali',
                    'required' => null,
                    'placeholder' => 'Alamat Kecamatan',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <?=
                form_input(array(
                    'name' => 'alamat_kabupaten_wali',
                    'id' => 'alamat-kabupaten-wali',
                    'required' => null,
                    'placeholder' => 'Alamat Kabpuaten/Kota',
                    'class' => 'form-control',
                    'data-validation' => 'required')
                );
                ?>
            </div>
            <div class="col-sm-5">
                <?=
                form_input(array(
                    'name' => 'alamat_provinsi_wali',
                    'id' => 'alamat-provinsi-wali',
                    'required' => null,
                    'placeholder' => 'Alamat Provinsi',
                    'class' => 'form-control',
                    'data-validation' => 'required')
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
                    'required' => null,
                    'placeholder' => 'No. telepon',
                    'class' => 'form-control',
                    'data-validation' => 'number')
                );
                ?>
            </div>
        </div>
    </div>

    <div class="tab-pane tab-pane-content fade" id="un">
        <?php foreach ($mapels as $value): ?>
            <div class="form-group">
                <?php
                $form_label = null;
                $form_input = null;

                switch ($value->id)
                {
                    case 1:
                        $form_label = form_label('Bahasa Indonesia', 'bhs-indo', array('class' => 'col-sm-2 control-label'));
                        $form_input = form_input(array(
                            'name' => 'bhs_indo',
                            'type' => 'number',
                            'min' => '0',
                            'max' => '100',
                            'id' => 'bhs-indo',
                            'required' => null,
                            'placeholder' => 'Bahasa Indonesia',
                            'class' => 'form-control',
                            'data-validation' => 'number',
                            'data-validation-allowing' => 'range[0;100],float',
                            'data-validation-decimal-separator' => ',')
                        );
                        echo $form_label;
                        break;
                    case 2:
                        $form_label = form_label('Bahasa Inggris', 'bhs-inggris', array('class' => 'col-sm-2 control-label'));
                        $form_input = form_input(array(
                            'name' => 'bhs_inggris',
                            'type' => 'number',
                            'min' => '0',
                            'max' => '100',
                            'id' => 'bhs-inggris',
                            'required' => null,
                            'placeholder' => 'Bahasa Inggris',
                            'class' => 'form-control',
                            'data-validation' => 'number',
                            'data-validation-allowing' => 'range[0;100],float',
                            'data-validation-decimal-separator' => ',')
                        );
                        echo $form_label;
                        break;
                    case 3:
                        $form_label = form_label('Matematika', 'matematika', array('class' => 'col-sm-2 control-label'));
                        $form_input = form_input(array(
                            'name' => 'matematika',
                            'type' => 'number',
                            'min' => '0',
                            'max' => '100',
                            'id' => 'matematika',
                            'required' => null,
                            'placeholder' => 'Matematika',
                            'class' => 'form-control',
                            'data-validation' => 'number',
                            'data-validation-allowing' => 'range[0;100],float',
                            'data-validation-decimal-separator' => ',')
                        );
                        echo $form_label;
                        break;
                    case 4:
                        $form_label = form_label('IPA', 'ipa', array('class' => 'col-sm-2 control-label'));
                        $form_input = form_input(array(
                            'name' => 'ipa',
                            'type' => 'number',
                            'min' => '0',
                            'max' => '100',
                            'id' => 'ipa',
                            'required' => null,
                            'placeholder' => 'Ilmu Pengetahuan Alam',
                            'class' => 'form-control',
                            'data-validation' => 'number',
                            'data-validation-allowing' => 'range[0;100],float',
                            'data-validation-decimal-separator' => ',')
                        );
                        echo $form_label;
                        break;
                    default:
                        break;
                }
                ?>
                <div class="col-sm-3">
                    <?= $form_input ?>
                </div>
            </div>
        <?php endforeach; ?>
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
        <?= form_label('Captcha', 'captcha', array('class' => 'col-sm-2 control-label')); ?>
        <div class="col-sm-2">
            <?= $capdata['image']; ?>     
            <?=
            form_input(array(
                'name' => 'captcha',
                'id' => 'captcha',
                'class' => 'form-control',
                'required' => null)
            );
            ?>
        </div>
        <div class="col-sm-7">

        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
        </div>
    </div>

</div>
<?= form_close(); ?>