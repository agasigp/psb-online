<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> Pekerjaan</h4>
                <h4><a href="<?= site_url('admin/pekerjaan/show_add_pekerjaan') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah Pekerjaan</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th><i class="fa fa-bullhorn"></i> Pekerjaan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = $this->uri->segment('4') + 1; ?>
                    <?php foreach ($pekerjaans as $pekerjaan): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="#"><?= $pekerjaan->pekerjaan ?></a></td>
                            <td>                               
                                <a href="<?= site_url('admin/pekerjaan/show_edit_pekerjaan/'.$pekerjaan->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/pekerjaan/do_delete_pekerjaan/'.$pekerjaan->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
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