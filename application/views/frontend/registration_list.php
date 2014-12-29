<h3>Hasil Seleksi Penerimaan Siswa Baru</h3>
<table class="table table-condensed table-hover table-striped table-bordered">
    <thead>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nama</th>
            <th rowspan="2">No. Pendaftaran</th>
            <th rowspan="2">Asal Sekolah</th>
            <th colspan="4">Nilai</th>
            <th rowspan="2">Total Skor Nilai</th>
            <th rowspan="2">Status</th>
        </tr>
        <tr>
            <th>Bahasa Indonesia</th>
            <th>Bahasa Inggris</th>
            <th>Matematika</th>
            <th>IPA</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($registration as $v): ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $v->nama ?></td>
                <td><?= $v->no_pendaftaran ?></td>
                <td><?= $v->sekolah ?></td>
                <td>85</td>
                <td>80</td>
                <td>80</td>
                <td>70</td>
                <td>500</td>
                <td>Diterima</td>
            </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </tbody>
</table>
<ul class="pagination">
    <li class="disabled"><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
</ul>