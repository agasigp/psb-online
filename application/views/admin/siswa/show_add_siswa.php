<div class="row mt">
    <div class="col-md-12">
        <div class="form-panel">
            <h4><i class="fa fa-angle-right"></i> Kelas Siswa</h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('Nama', 'nama', array('class' => 'col-sm-2 control-label')) ?>
                <div class="col-sm-10">
                    <p class="form-control-static"><?= $siswa->nama; ?></p>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('No Pendaftaran', 'no-daftar', array('class' => 'col-sm-2 control-label')) ?>
                <div class="col-sm-10">
                    <p class="form-control-static"><?= $siswa->no_pendaftaran; ?></p>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Kelas', 'status', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-3">
                    <?php
                    $kls = array();
                    foreach ($kelas as $value)
                    {
                        $kls[$value->id] = $value->kelas;
                    }
                    ?>
                    <?= form_dropdown('kelas', $kls, null, 'class="form-control" id="group" required') ?>
                </div>
            </div>
            <?= form_hidden('id_siswa', $siswa->id); ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div>
</div>