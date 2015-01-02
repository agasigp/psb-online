<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> Bobot Nilai</h4>
                <h4><a href="<?= site_url('admin/bobot_nilai/show_add_bobot_nilai') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah Bobot Nilai</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th><i class="fa fa-bullhorn"></i> Program Keahlian</th>
                        <th>Mata Pelajaran</th>
                        <th>Bobot</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = $this->uri->segment('4') + 1; ?>
                    <?php foreach ($bobot_nilais as $bobot_nilai): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><?= $bobot_nilai->program_keahlian ?></td>
                            <td><?= $bobot_nilai->mata_pelajaran ?></td>
                            <td><?= $bobot_nilai->bobot ?></td>
                            <td>                               
                                <a href="<?= site_url('admin/bobot_nilai/show_edit_bobot_nilai/'.$bobot_nilai->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/bobot_nilai/do_delete_bobot_nilai/'.$bobot_nilai->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->