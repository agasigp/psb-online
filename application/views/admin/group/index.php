<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> group</h4>
                <h4><a href="<?= site_url('admin/group/show_add_group') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah Group</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th><i class="fa fa-bullhorn"></i> Group</th>
                        <th><i class="fa fa-bookmark"></i> Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($groups as $group): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="#"><?= $group->name ?></a></td>
                            <td><?= $group->description ?></td>
                            <td>                               
                                <a href="<?= site_url('admin/group/show_edit_group/'.$group->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/group/do_delete_group/'.$group->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->