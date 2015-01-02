<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('Program Keahlian', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $pk = array();
                    foreach ($program_keahlian as $value)
                    {
                        $pk[$value->id] = $value->program_keahlian;
                    }

                    if (isset($bobot_nilai))
                    {
                        echo form_dropdown('program_keahlian', $pk, $bobot_nilai->program_keahlian_id, 'class="form-control" id="group required"');
                    }
                    else
                    {
                        echo form_dropdown('program_keahlian', $pk, null, 'class="form-control" id="group required"');
                    }
                    
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Mata Pelajaran', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $mapel = array();
                    foreach ($mata_pelajaran as $value)
                    {
                        $mapel[$value->id] = $value->mata_pelajaran;
                    }

                    if (isset($bobot_nilai))
                    {
                        echo form_dropdown('mapel', $mapel, $bobot_nilai->mata_pelajaran_id, 'class="form-control" id="group required"');
                    }
                    else
                    {
                        echo form_dropdown('mapel', $mapel, null, 'class="form-control" id="group required"');
                    }

                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Bobot', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($bobot_nilai))
                    {
                        echo form_input(array(
                            'value' => $bobot_nilai->bobot,
                            'name' => 'bobot',
                            'required' => null,
                            'placeholder' => 'Bobot',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'bobot',
                            'required' => null,
                            'placeholder' => 'Bobot',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>                   
            <?php
                if (isset($bobot_nilai))
                {
                    echo form_hidden('id', $bobot_nilai->id);
                }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
            <?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->