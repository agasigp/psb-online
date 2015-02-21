<!--<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">-->
<table class="table table-striped table-advance table-hover" id="registrationlist">
    <?= $this->session->flashdata('info') ?>
    <h4><i class="fa fa-angle-right"></i> Data Siswa</h4>
    <hr>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Program Keahlian</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($siswa as $v): ?>
            <tr>
                <td></td>
                <td><a href="<?= site_url('admin/siswa/show_detail_calon_siswa/' . $v->id); ?>"><?= $v->nama ?></a></td>
                <td><?= $v->kelas ?></td>
                <td><?= $v->program_keahlian ?></td>
                <td>
                    <a href="<?= site_url('admin/siswa/show_edit_status_calon_siswa/' . $v->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                    <a href="<?= site_url('admin/siswa/show_add_tes_kesehatan/' . $v->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                    <a href="<?= site_url('admin/siswa/show_add_siswa/' . $v->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                    <a href="<?= site_url('admin/siswa/do_delete_agama/' . $v->id); ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<!--        </div> /content-panel
    </div> /col-md-12 
</div> /row -->