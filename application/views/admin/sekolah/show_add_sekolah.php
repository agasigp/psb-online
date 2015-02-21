<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('Sekolah', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($sekolah))
                    {
                        echo form_input(array(
                            'value' => $sekolah->nama,
                            'name' => 'sekolah',
                            'required' => null,
                            'placeholder' => 'Sekolah',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'sekolah',
                            'required' => null,
                            'placeholder' => 'Sekolah',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>           
            <div class="form-group">
                <?= form_label('NPSN', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($sekolah))
                    {
                        echo form_input(array(
                            'value' => $sekolah->npsn,
                            'name' => 'npsn',
                            'required' => null,
                            'placeholder' => 'NPSN',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'npsn',
                            'required' => null,
                            'placeholder' => 'NPSN',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Alamat', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($sekolah))
                    {
                        echo form_input(array(
                            'value' => $sekolah->alamat,
                            'name' => 'alamat',
                            'required' => null,
                            'placeholder' => 'Alamat',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'alamat',
                            'required' => null,
                            'placeholder' => 'Alamat',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Status', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($sekolah))
                    {
                        echo form_input(array(
                            'value' => $sekolah->status,
                            'name' => 'status',
                            'required' => null,
                            'placeholder' => 'Status',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'status',
                            'required' => null,
                            'placeholder' => 'Status',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <?php
                if (isset($sekolah))
                {
                    echo form_hidden('id', $sekolah->id);
                }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->