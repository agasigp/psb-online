<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> Info</h4>
                <h4><a href="<?= site_url('admin/info/show_add_info') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah Info</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Judul</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = $this->uri->segment('4') + 1; ?>
                    <?php foreach ($info as $v): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="#"><?= $v->title ?></a></td>
                            <td>                               
                                <a href="<?= site_url('admin/info/show_edit_info/'.$v->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/info/do_delete_info/'.$v->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->