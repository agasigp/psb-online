<!--<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">-->
            <table class="table table-striped table-advance table-hover" id="registrationlist">
                <?= $this->session->flashdata('info') ?>
                <h4><i class="fa fa-angle-right"></i> Siswa</h4>
                <hr>
                <thead>
                    <tr>
                        <th rowspan="2">No</th>
                        <th rowspan="2">Nama</th>
                        <th rowspan="2">No. Pendaftaran</th>
                        <th rowspan="2">Asal Sekolah</th>
                        <th colspan="4">Nilai</th>
                        <th rowspan="2">Total Nilai</th>
                        <th rowspan="2">Status</th>
                        <th rowspan="2">Aksi</th>
                    </tr>
                    <tr>
                        <th>Bahasa Indonesia</th>
                        <th>Bahasa Inggris</th>
                        <th>Matematika</th>
                        <th>IPA</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = (int) $this->uri->segment('4') + 1; ?>
                    <?php foreach ($siswas as $v): ?>
                        <tr>
                            <td><?= $no; ?></td>
                            <td><a href="<?= site_url('admin/siswa/show_detail_calon_siswa/'.$v->id); ?>"><?= $v->nama ?></a></td>
                            <td><?= $v->no_pendaftaran ?></td>
                            <td><?= $v->sekolah ?></td>
                            <?php
                            $nilai_un = explode(",", $v->nilai);
                            $bobot = explode(",", $v->bobot);
                            $sum = 0;

                            foreach ($nilai_un as $k => $v1)
                            {
                                if (empty($bobot))
                                {
                                    echo "<td>" . $v1 . "</td>";
                                }
                                else
                                {
                                    $sum = $sum + ($v1 * $bobot[$k]);
                                    echo "<td>".$v1." (x".$bobot[$k].")</td>";
                                }
                            }
//
                            ?>
                            <td><?= $sum; ?></td>
                            <td>
                                <?php
                                switch ($v->status) {
                                    case "1":
                                        echo "Belum melengkapi berkas";
                                        break;
                                    case "2":
                                        echo "Sudah melengkapi berkas";
                                        break;
                                    case "3":
                                        echo "Sudah registrasi ulang";
                                        break;
                                }
                                ?>
                            </td>
                            <td>
                                <a href="<?= site_url('admin/siswa/show_edit_status_calon_siswa/'.$v->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/siswa/show_add_tes_kesehatan/'.$v->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/siswa/show_add_siswa/'.$v->id); ?>"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button></a>
                                <a href="<?= site_url('admin/siswa/do_delete_agama/'.$v->id); ?>"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                            </td>
                        </tr>
                        <?php $no++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
<!--        </div> /content-panel
    </div> /col-md-12 
</div> /row -->