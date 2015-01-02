<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('mapel', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($mapel))
                    {
                        echo form_input(array(
                            'value' => $mapel->mata_pelajaran,
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'mapel',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'mapel',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>                   
            <?php
                if (isset($mapel))
                {
                    echo form_hidden('id', $mapel->id);
                }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->