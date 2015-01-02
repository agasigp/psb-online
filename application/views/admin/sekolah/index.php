<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <table class="table table-striped table-advance table-hover">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> Sekolah</h4>
                <h4><a href="<?= site_url('admin/sekolah/show_add_sekolah') ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-plus"></i>Tambah Sekolah</button></a></h4>
                <hr>
                <thead>
                    <tr>
                        <th>No</th>
                        <th><i class="fa fa-bullhorn"></i> Sekolah</th>
                        <th><i class="fa fa-bookmark"></i> NPSN</th>
                        <th><i class="fa fa-bookmark"></i> Alamat</th>
                        <th><i class="fa fa-bookmark"></i> Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = $this->uri->segment('4') + 1; ?>
                    <?php foreach ($sekolahs as $sekolah): ?>
                        <tr>
                            <td><?= $no ?></td>
                            <td><a href="#"><?= $sekolah->nama ?></a></td>
                            <td><?= $sekolah->npsn ?></td>
                            <td><?= $sekolah->alamat ?></td>
                            <td><?= $sekolah->status ?></td>
                            <td>                               
                                <a href="<?= site_url('admin/sekolah/show_edit_sekolah/'.$sekolah->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/sekolah/do_delete_sekolah/'.$sekolah->id) ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div><!-- /content-panel -->
    </div><!-- /col-md-12 -->
</div><!-- /row -->