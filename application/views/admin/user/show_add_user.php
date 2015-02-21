<!-- BASIC FORM ELELEMNTS -->
<div class="row mt">
    <div class="col-lg-12">
        <div class="form-panel">
            <?= $this->session->flashdata('info') ?>
            <h4 class="mb"><i class="fa fa-angle-right"></i> <?= $title; ?></h4>
            <?= form_open($action, array('class' => 'form-horizontal style-form')); ?>
            <div class="form-group">
                <?= form_label('Username', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($user))
                    {
                        echo form_input(array(
                            'value' => $user->username,
                            'name' => 'username',
                            'required' => null,
                            'placeholder' => 'Username',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'value' => '',
                            'name' => 'username',
                            'required' => null,
                            'placeholder' => 'Username',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Password', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?=
                    form_password(array(
                        'name' => 'password',
                        'placeholder' => 'Password',
                        'class' => 'form-control')
                    );
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Nama', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($user))
                    {
                        echo form_input(array(
                            'value' => $user->first_name,
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'Nama',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'nama',
                            'required' => null,
                            'placeholder' => 'Nama',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Email', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-10">
                    <?php
                    if (isset($user))
                    {
                        echo form_input(array(
                            'value' => $user->email,
                            'name' => 'email',
                            'required' => null,
                            'placeholder' => 'Email',
                            'class' => 'form-control')
                        );
                    }
                    else
                    {
                        echo form_input(array(
                            'name' => 'email',
                            'required' => null,
                            'placeholder' => 'Email',
                            'class' => 'form-control')
                        );
                    }
                    ?>
                </div>
            </div>
            <div class="form-group">
                <?= form_label('Groups', null, array('class' => 'col-sm-2 control-label')); ?>
                <div class="col-sm-4">
                    <?php
                    $group = array();
                    foreach ($groups as $value)
                    {
                        $group[$value->id] = $value->name;
                    }
                    echo form_dropdown('group', $group, null, 'class="form-control" id="group required"');
                    ?>
                </div>
            </div>
            <?php
                if (isset($user))
                {
                    echo form_hidden('id', $user->id);
                }
            ?>
            <?= form_submit('save', 'Simpan', 'class="btn btn-default"') ?>
<?= form_close(); ?>
        </div>
    </div><!-- col-lg-12-->
</div><!-- /row -->