<div class="col-sm-3">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Hasil Seleksi</h3>
        </div>
        <div class="panel-body">
            <?= form_open('registration/search_registration'); ?>
            <div class="input-group">              
                <?=
                form_input(array(
                    'name' => 'no_pendaftaran',
                    'required' => null,
                    'placeholder' => 'No. Pendaftaran',
                    'class' => 'form-control')
                );
                ?>
                <span class="input-group-btn">
                    <?= form_submit('save', 'Cari', 'class="btn btn-default"') ?>
                </span>            
            </div><!-- /input-group -->
            <?= form_close(); ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Statistik Pendaftar</h3>
        </div>
        <div class="panel-body">
            <ul>
                <li>Sudah Melengkapi Berkas: <a href="#">327</a></li>
                <li>Belum Melengkapi Berkas: <a href="#">327</a></li>
                <li>Total Pendaftar: <a href="#">327</a></li>
            </ul>
        </div>
    </div>
</div>