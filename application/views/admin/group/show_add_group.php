<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('groupname', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($group))
                    {
                        echo form_input(array(
                            'value' => $group->name,
                            'name' => 'groupname',
                            'required' => null,
                            'placeholder' => 'Group',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'groupname',
                            'required' => null,
                            'placeholder' => 'Group',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>           
            <div class="form-group">
                <?= form_label('Nama', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($group))
                    {
                        echo form_input(array(
                            'value' => $group->description,
                            'name' => 'description',
                            'required' => null,
                            'placeholder' => 'Deskripsi',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'description',
                            'required' => null,
                            'placeholder' => 'Deskripsi',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            
            <?php
                if (isset($group))
                {
                    echo form_hidden('id', $group->id);
                }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->