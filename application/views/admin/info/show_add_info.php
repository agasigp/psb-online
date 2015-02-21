<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('Judul', null, array('class' => 'col-sm-1 control-label')); ?>
                <div class="col-sm-3">
                    <?php
                    if (isset($info))
                    {
                        echo form_input(array(
                            'value' => $info->title,
                            'name' => 'title',
                            'required' => null,
                            'placeholder' => 'Judul',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'title',
                            'required' => null,
                            'placeholder' => 'Judul',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Info', null, array('class' => 'col-sm-1 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($info))
                    {
                        echo form_textarea(array(
                            'value' => $info->info,
                            'name' => 'info',
                            'placeholder' => 'Info',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_textarea(array(
                            'name' => 'info',
                            'placeholder' => 'Info',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>                   
            <?php
            if (isset($info))
            {
                echo form_hidden('id', $info->id);
            }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->