<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
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
                <?= form_label('Tinggi Badan', 'tinggi-badan', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($tes_kesehatan))
                    {
                        echo form_input(array(
                            'name' => 'tinggi_badan',
                            'id' => 'tinggi-badan',
                            'required' => null,
                            'placeholder' => 'Tinggi Badan',
                            'value' => $tes_kesehatan->tinggi_badan,
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'tinggi_badan',
                            'id' => 'tinggi-badan',
                            'required' => null,
                            'placeholder' => 'Tinggi Badan',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Berat Badan', 'berat-badan', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($tes_kesehatan))
                    {
                        echo form_input(array(
                            'name' => 'berat_badan',
                            'id' => 'tinggi-badan',
                            'required' => null,
                            'placeholder' => 'Tinggi Badan',
                            'value' => $tes_kesehatan->berat_badan,
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'berat_badan',
                            'id' => 'tinggi-badan',
                            'required' => null,
                            'placeholder' => 'Tinggi Badan',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Cacat Fisik', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?php
                        if ($tes_kesehatan->cacat_fisik === "N")
                            $cacat_fisik = FALSE;
                        else
                            $cacat_fisik = TRUE;
                        ?>
                        <label class="radio-inline">
                            <?= form_radio('cacat_fisik', 'Y', $cacat_fisik); ?>Ya
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('cacat_fisik', 'N', !$cacat_fisik); ?>Tidak
                        </label>
                    <?php else: ?>
                        <label class="radio-inline">
                            <?= form_radio('cacat_fisik', 'Y', FALSE); ?>Ya
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('cacat_fisik', 'N', TRUE); ?>Tidak
                        </label>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Penglihatan', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>    
                        <?php
                        if ($tes_kesehatan->penglihatan === "N")
                            $penglihatan = FALSE;
                        else
                            $penglihatan = TRUE;
                        ?>
                        <label class="radio-inline">
                            <?= form_radio('penglihatan', 'Y', $penglihatan); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('penglihatan', 'N', !$penglihatan); ?>Tidak
                        </label>
                    <?php else: ?>
                        <label class="radio-inline">
                            <?= form_radio('penglihatan', 'Y', TRUE); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('penglihatan', 'N', FALSE); ?>Tidak
                        </label>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Buta Warna', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?php
                        if ($tes_kesehatan->buta_warna === "N")
                            $buta = FALSE;
                        else
                            $buta = TRUE;
                        ?>
                        <label class="radio-inline">
                            <?= form_radio('buta_warna', 'Y', $buta); ?>Ya
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('buta_warna', 'N', !$buta); ?>Tidak
                        </label>
                    <?php else: ?>
                        <label class="radio-inline">
                            <?= form_radio('buta_warna', 'Y', FALSE); ?>Ya
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('buta_warna', 'N', TRUE); ?>Tidak
                        </label>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Pendengaran', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?php
                        if ($tes_kesehatan->pendengaran === "N")
                            $pendengaran = FALSE;
                        else
                            $pendengaran = TRUE;
                        ?>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran', 'Y', $pendengaran); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran', 'N', !$pendengaran); ?>Tidak
                        </label>
                    <?php else: ?>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran', 'Y', TRUE); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran', 'N', FALSE); ?>Tidak
                        </label>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Pendengaran Telinga Kanan', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?php
                        if ($tes_kesehatan->pendengaran_telinga_kanan === "N")
                            $pendengaran_telinga_kanan = FALSE;
                        else
                            $pendengaran_telinga_kanan = TRUE;
                        ?>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kanan', 'Y', $pendengaran_telinga_kanan); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kanan', 'N', !$pendengaran_telinga_kanan); ?>Tidak
                        </label>
                    <?php else: ?>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kanan', 'Y', TRUE); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kanan', 'N', FALSE); ?>Tidak
                        </label>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Pendengaran Telinga Kiri', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?php
                        if ($tes_kesehatan->pendengaran_telinga_kiri === "N")
                            $pendengaran_telinga_kiri = FALSE;
                        else
                            $pendengaran_telinga_kiri = TRUE;
                        ?>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kiri', 'Y', $pendengaran_telinga_kiri); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kiri', 'N', !$pendengaran_telinga_kiri); ?>Tidak
                        </label>
                    <?php else: ?>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kiri', 'Y', TRUE); ?>Baik
                        </label>
                        <label class="radio-inline">
                            <?= form_radio('pendengaran_telinga_kiri', 'N', FALSE); ?>Tidak
                        </label>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Motivasi', 'motivasi', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?=
                        form_textarea(array(
                            'name' => 'motivasi',
                            'id' => 'motivasi',
                            'required' => null,
                            'placeholder' => 'Motivasi',
                            'class' => 'form-control',
                            'value' => $tes_kesehatan->motivasi,
                            'rows' => '3')
                        );
                        ?>
                    <?php else: ?>
                        <?=
                        form_textarea(array(
                            'name' => 'motivasi',
                            'id' => 'motivasi',
                            'required' => null,
                            'placeholder' => 'Motivasi',
                            'class' => 'form-control',
                            'rows' => '3')
                        );
                        ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Kesimpulan', 'kesimpulan', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?=
                        form_textarea(array(
                            'name' => 'kesimpulan',
                            'id' => 'kesimpulan',
                            'required' => null,
                            'placeholder' => 'Kesimpulan',
                            'class' => 'form-control',
                            'value' => $tes_kesehatan->kesimpulan,
                            'rows' => '3')
                        );
                        ?>
                    <?php else: ?>
                        <?=
                        form_textarea(array(
                            'name' => 'kesimpulan',
                            'id' => 'kesimpulan',
                            'required' => null,
                            'placeholder' => 'Kesimpulan',
                            'class' => 'form-control',
                            'rows' => '3')
                        );
                        ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="form-group">
                <?= form_label('Penguji 1', 'penguji1', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?=
                        form_input(array(
                            'name' => 'penguji1',
                            'id' => 'penguji1',
                            'required' => null,
                            'placeholder' => 'Penguji 1',
                            'value' => $tes_kesehatan->penguji1,
                            'class' => 'form-control')
                        );
                        ?>
                    <?php else: ?>
                        <?=
                        form_input(array(
                            'name' => 'penguji1',
                            'id' => 'penguji1',
                            'required' => null,
                            'placeholder' => 'Penguji 1',
                            'class' => 'form-control')
                        );
                        ?>
                    <?php endif; ?>

                </div>
            </div>
            <div class="form-group">
                <?= form_label('Penguji 2', 'penguji2', array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php if (isset($tes_kesehatan)): ?>
                        <?=
                        form_input(array(
                            'name' => 'penguji2',
                            'id' => 'penguji2',
                            'required' => null,
                            'placeholder' => 'Penguji 2',
                            'value' => $tes_kesehatan->penguji2,
                            'class' => 'form-control')
                        );
                        ?>
                    <?php else: ?>
                        <?=
                        form_input(array(
                            'name' => 'penguji2',
                            'id' => 'penguji2',
                            'required' => null,
                            'placeholder' => 'Penguji 2',
                            'class' => 'form-control')
                        );
                        ?>
                    <?php endif; ?>

                </div>
            </div>
            <?= form_hidden('id_siswa', $siswa->id); ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->