<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
<!--            <div class="form-group">
                <?php //  form_label('Program Keahlian', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-3">
                    <?php
//                    $jurusan = array();
//                    foreach ($program_keahlian as $value)
//                    {
//                        $jurusan[$value->id] = $value->program_keahlian;
//                    }
//
//                    $selected = (isset($kelas)) ? $kelas->program_keahlian_id : null;
//
//                    echo form_dropdown('program_keahlian', $jurusan, $selected, 'class="form-control" id="program-keahlian"');
                    ?>
                </div>
            </div>-->
            <div class="form-group">
                <?= form_label('Kelas', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-3">
                    <?php
                    if (isset($kelas))
                    {
                        echo form_input(array(
                            'value' => $kelas->kelas,
                            'name' => 'kelas',
                            'required' => null,
                            'placeholder' => 'kelas',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'kelas',
                            'required' => null,
                            'placeholder' => 'kelas',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>                   
            <?php
            if (isset($kelas))
            {
                echo form_hidden('id', $kelas->id);
            }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->