<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('program_keahlian', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($program_keahlian))
                    {
                        echo form_input(array(
                            'value' => $program_keahlian->program_keahlian,
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'program_keahlian',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'program_keahlian',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Kode', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($program_keahlian))
                    {
                        echo form_input(array(
                            'value' => $program_keahlian->kode,
                            'name' => 'kode',
                            'required' => null,
                            'placeholder' => 'Kode',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'kode',
                            'required' => null,
                            'placeholder' => 'Kode',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <?php
                if (isset($program_keahlian))
                {
                    echo form_hidden('id', $program_keahlian->id);
                }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->