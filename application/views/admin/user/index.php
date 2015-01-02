<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> User</h4>
                <h4><a href="<?= site_url('admin/user/show_add_user') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah User</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th><i class="fa fa-bullhorn"></i> Username</th>
                        <th class="hidden-phone"><i class="fa fa-question-circle"></i> Email</th>
                        <th><i class="fa fa-bookmark"></i> Nama</th>
                        <th><i class=" fa fa-edit"></i> Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="#"><?= $user->username ?></a></td>
                            <td class="hidden-phone"><?= $user->email ?></td>
                            <td><?= $user->first_name." ".$user->last_name ?></td>
                            <td><span class="label label-info label-mini"><?= $user->active ?></span></td>
                            <td>                               
                                <a href="<?= site_url('admin/user/show_edit_user/'.$user->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/user/do_delete_user/'.$user->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>          
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->