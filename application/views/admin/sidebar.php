<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?= base_url('resources/img/ui-sam.jpg') ?>" class="img-circle" width="60"></a></p>
            <h5 class="centered">
                <?php
                $user = $this->ion_auth->user()->row();
                echo $user->username;
                ?>
            </h5>

            <li class="sub-menu">
                <a id="psb" href="javascript:;" >
                    <i class="fa fa-desktop"></i>
                    <span>PSB</span>
                </a>
                <ul class="sub">
                    <li id="calon-siswa"><a href="<?= site_url('admin/siswa') ?>">Calon Siswa</a></li>
                </ul>
                <ul class="sub">
                    <li id="siswa"><a href="<?= site_url('admin/siswa/show_siswa') ?>">Siswa</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a id="master" href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Master</span>
                </a>
                <ul class="sub">
                    <li id="user"><a href="<?= site_url('admin/user/show_user') ?>">User</a></li>
                    <li id="group"><a href="<?= site_url('admin/group'); ?>">Group</a></li>
                    <li id="mapel"><a href="<?= site_url('admin/mapel') ?>">Mata Pelajaran</a></li>
                    <li id="program_keahlian"><a href="<?= site_url('admin/program_keahlian') ?>">Program Keahlian</a></li>
                    <li id="bobot_nilai"><a href="<?= site_url('admin/bobot_nilai') ?>">Bobot Nilai</a></li>
                    <li id="kelas"><a href="<?= site_url('admin/kelas') ?>">Kelas</a></li>
                    <li id="info"><a href="<?= site_url('admin/info') ?>">Info</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a id="master" href="javascript:;" >
                    <i class="fa fa-book"></i>
                    <span>Laporan</span>
                </a>
                <ul class="sub">
                    <li id="laporan1"><a href="<?= site_url('admin/laporan') ?>">Laporan 1</a></li>
                    <li id="laporan2"><a href="<?= site_url('admin/laporan') ?>">Laporan 2</a></li>
                    <li id="laporan3"><a href="<?= site_url('admin/laporan') ?>">Laporan 3</a></li>
                </ul>
            </li>
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->