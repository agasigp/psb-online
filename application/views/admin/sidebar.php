<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">

            <p class="centered"><a href="profile.html"><img src="<?= base_url('resources/img/ui-sam.jpg') ?>" class="img-circle" width="60"></a></p>
            <h5 class="centered">Marcel Newman</h5>

            <li class="mt">
                <a href="index.html">
                    <i class="fa fa-dashboard"></i>
                    <span>Dashboard</span>
                </a>
            </li>

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
                    <li id="sekolah"><a href="<?= site_url('admin/sekolah') ?>">Sekolah</a></li>
                    <li id="agama"><a href="<?= site_url('admin/agama') ?>">Agama</a></li>
                    <li id="pekerjaan"><a href="<?= site_url('admin/pekerjaan') ?>">Pekerjaan</a></li>
                    <li id="mapel"><a href="<?= site_url('admin/mapel') ?>">Mata Pelajaran</a></li>
                    <li id="program_keahlian"><a href="<?= site_url('admin/program_keahlian') ?>">Program Keahlian</a></li>
                    <li id="bobot_nilai"><a href="<?= site_url('admin/bobot_nilai') ?>">Bobot Nilai</a></li>
                    <li id="kelas"><a href="<?= site_url('admin/kelas') ?>">Kelas</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-tasks"></i>
                    <span>Forms</span>
                </a>
                <ul class="sub">
                    <li><a  href="form_component.html">Form Components</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class="fa fa-th"></i>
                    <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a  href="basic_table.html">Basic Table</a></li>
                    <li><a  href="responsive_table.html">Responsive Table</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                    <i class=" fa fa-bar-chart-o"></i>
                    <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a  href="morris.html">Morris</a></li>
                    <li><a  href="chartjs.html">Chartjs</a></li>
                </ul>
            </li>

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->