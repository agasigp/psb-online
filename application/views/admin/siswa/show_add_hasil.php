<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('Agama', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($agama))
                    {
                        echo form_input(array(
                            'value' => $agama->agama,
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'Agama',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'Agama',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>                   
            <?php
                if (isset($agama))
                {
                    echo form_hidden('id', $agama->id);
                }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->