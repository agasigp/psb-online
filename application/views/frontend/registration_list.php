<div class="row">
    <div class="col-sm-10">
        <h3>Hasil Seleksi Penerimaan Siswa Baru</h3>
        <?php
        echo form_open(site_url('registration/list_registration'), array('class' => 'form-inline'));
        $jurusan = array();
        foreach ($program_keahlian as $value)
        {
            $jurusan[$value->id] = $value->program_keahlian;
        }
        echo form_dropdown('program_keahlian', $jurusan, $program_keahlian_id, 'class="form-control" id="program-keahlian" required"');
        echo form_close();
        ?>
    </div>
</div>

<table class="table table-condensed table-hover table-striped table-bordered" id="registrationlist">
    <thead>
        <tr>
            <th rowspan="2">No</th>
            
            <th rowspan="2">Nama</th>
            <th rowspan="2">No. Pendaftaran</th>
            <th rowspan="2">Asal Sekolah</th>
            <th colspan="4">Nilai</th>
            <th rowspan="2">Total Skor Nilai</th>
            <th rowspan="2">Waktu Daftar</th>
            
        </tr>
        <tr>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Matematika</th>
            <th>IPA</th>
        </tr>
    </thead>
    <tbody>
        <?php // print_r($registration);exit; ?>
        <?php foreach ($registration as $v): ?>
            <tr>
                <td></td>
                <td><?= $v->nama ?></td>
                <td><?= $v->no_pendaftaran ?></td>
                <td><?= $v->sekolah_asal ?></td>
                <?php
                $nilai_un = explode(",", $v->nilai);
                $bobot = explode(",", $v->bobot);
                $sum = 0;
//                print_r($bobot);exit;
                foreach ($nilai_un as $key => $val)
                {
                    if (empty($bobot))
                    {
                        echo "<td>".$val."</td>";
                    }
                    else
                    {
                        $sum = $sum + ($val * $bobot[$key]);
                        echo "<td>".$val." (x".$bobot[$key].")</td>";
                    }
                }
//
                ?>
                <td><?= $sum; ?></td>
                <td><?= $v->waktu_daftar ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>


