<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> program_keahlian</h4>
                <h4><a href="<?= site_url('admin/program_keahlian/show_add_program_keahlian') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah program_keahlian</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th><i class="fa fa-bullhorn"></i> program_keahlian</th>
                        <th>Kode</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = $this->uri->segment('4') + 1; ?>
                    <?php foreach ($program_keahlians as $program_keahlian): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="#"><?= $program_keahlian->program_keahlian ?></a></td>
                            <td><?= $program_keahlian->kode ?></td>
                            <td>                               
                                <a href="<?= site_url('admin/program_keahlian/show_edit_program_keahlian/'.$program_keahlian->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/program_keahlian/do_delete_program_keahlian/'.$program_keahlian->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->