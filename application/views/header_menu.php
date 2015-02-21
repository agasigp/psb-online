<div class="row">
    <div class="col-sm-12 menu">
        <ul class="nav nav-pills">
            <li class="active"><a href="<?= site_url(); ?>">Beranda</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Pendaftaran PSB <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= site_url('registration/show_registration') ?>">Pendaftaran Siswa Baru</a></li>
                    <li><a href="<?= site_url('registration/list_registration') ?>">Data Pendaftar</a></li>
                    <li class="divider"></li>
                    <li><a href="<?= site_url('registration/show_info') ?>">Info Umum PSB</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    Tentang Sekolah <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="<?= site_url('registration/show_visi_misi') ?>">Visi & Misi</a></li>
                    <li><a href="<?= site_url('registration/show_info_jurusan') ?>">Info Jurusan</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>  