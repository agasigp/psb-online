<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> Agama</h4>
                <h4><a href="<?= site_url('admin/agama/show_add_agama') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah Agama</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th><i class="fa fa-bullhorn"></i> Agama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = $this->uri->segment('4') + 1; ?>
                    <?php foreach ($agamas as $agama): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="#"><?= $agama->agama ?></a></td>
                            <td>                               
                                <a href="<?= site_url('admin/agama/show_edit_agama/'.$agama->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/agama/do_delete_agama/'.$agama->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->