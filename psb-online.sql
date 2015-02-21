-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - Source distribution
-- Server OS:                    Linux
-- HeidiSQL Version:             9.1.0.4904
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
-- Dumping data for table psb_online.agama: ~3 rows (approximately)
/*!40000 ALTER TABLE `agama` DISABLE KEYS */;
INSERT INTO `agama` (`id`, `agama`) VALUES
	(1, 'Islam'),
	(2, 'Kristen'),
	(3, 'Hindu');
/*!40000 ALTER TABLE `agama` ENABLE KEYS */;

-- Dumping data for table psb_online.bobot: ~24 rows (approximately)
/*!40000 ALTER TABLE `bobot` DISABLE KEYS */;
INSERT INTO `bobot` (`id`, `mata_pelajaran_id`, `program_keahlian_id`, `bobot`) VALUES
	(1, 1, 2, 1),
	(2, 2, 2, 2),
	(4, 3, 2, 3),
	(5, 4, 2, 1),
	(6, 1, 1, 1),
	(7, 2, 1, 2),
	(8, 3, 1, 2),
	(9, 4, 1, 1),
	(10, 3, 5, 3),
	(11, 1, 5, 1),
	(12, 2, 5, 1),
	(13, 4, 5, 1),
	(14, 1, 3, 1),
	(15, 2, 3, 1),
	(16, 3, 3, 1),
	(17, 4, 3, 1),
	(18, 1, 4, 1),
	(19, 2, 4, 2),
	(20, 3, 4, 3),
	(21, 4, 4, 4),
	(22, 1, 6, 1),
	(23, 2, 6, 1),
	(24, 3, 6, 1),
	(25, 4, 6, 1);
/*!40000 ALTER TABLE `bobot` ENABLE KEYS */;

-- Dumping data for table psb_online.calon_siswa: ~21 rows (approximately)
/*!40000 ALTER TABLE `calon_siswa` DISABLE KEYS */;
INSERT INTO `calon_siswa` (`id`, `users_id`, `program_keahlian_id`, `no_pendaftaran`, `nama`, `nisn`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama_id`, `alamat`, `alamat_kelurahan`, `alamat_kecamatan`, `alamat_kabupaten`, `alamat_provinsi`, `alamat_jogja`, `alamat_jogja_rtrw`, `alamat_jogja_kelurahan`, `alamat_jogja_kecamatan`, `alamat_jogja_kabupaten`, `no_telepon`, `ayah`, `ibu`, `alamat_ortu`, `alamat_kelurahan_ortu`, `alamat_kecamatan_ortu`, `alamat_kabupaten_ortu`, `alamat_provinsi_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_telepon_ortu`, `wali`, `pekerjaan_wali`, `alamat_wali`, `alamat_kelurahan_wali`, `alamat_kecamatan_wali`, `alamat_kabupaten_wali`, `alamat_provinsi_wali`, `no_telepon_wali`, `sekolah_id`, `sekolah_asal`, `npsn`, `sekolah_status`, `sekolah_alamat`, `status`, `waktu_daftar`) VALUES
	(1, NULL, 2, '00001/PRWT/SMK/14', 'Agasi Gilang Persada', '1234567', 'Jogja', '1989-02-03', 'L', 1, 'Jogj', '', '', '', '', 'Jogj', '', '', '', '', '123456', 'Martono', 'Dyah', 'Jogj', '', '', '', '', 2, 1, '', 'Dia', 1, 'Jogj', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 18:09:22'),
	(7, NULL, 2, '00002/MM/SMK/14', 'Dian Budi Santoso', '123456', 'Purwokerto', '1988-02-03', 'L', 1, 'Balikpapan', '', '', '', '', 'Balikpapan', '', '', '', '', '123456', 'Budi Santoso', 'Ani Susanti', 'Balikpapan', '', '', '', '', 1, 1, '', 'Dia', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2013-12-25 18:56:31'),
	(8, NULL, 3, '00003/TKR/SMK/14', 'Budi Dian 1', '987654', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 19:03:10'),
	(9, NULL, 3, '00004/TKR/SMK/14', 'Budi Dian 2', '987653', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 19:07:15'),
	(10, NULL, 3, '00005/TKR/SMK/14', 'Budi Dian 3', '987652', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 19:07:29'),
	(11, NULL, 3, '00006/TKR/SMK/14', 'Budi Dian 4', '987651', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 20:11:03'),
	(12, NULL, 3, '00007/TKR/SMK/14', 'Budi Dian 5', '987650', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 2, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 20:14:52'),
	(13, NULL, 3, '00008/TKR/SMK/14', 'Budi Dian 6', '987659', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:04:52'),
	(14, NULL, 3, '00009/TKR/SMK/14', 'Budi Dian 7', '987658', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:08:15'),
	(15, NULL, 3, '00010/TKR/SMK/14', 'Budi Dian 8', '987657', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 2, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:26:53'),
	(16, NULL, 3, '00011/TKR/SMK/14', 'Budi Dian 9', '987656', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:28:56'),
	(17, NULL, 3, '00012/TKR/SMK/14', 'Budi Dian 10', '987655', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:29:33'),
	(18, NULL, 3, '00013/TKR/SMK/14', 'Budi Dian 11', '987649', 'Jogja', '1990-03-03', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '123456', 'Budi', 'Yuni', 'Jogja', '', '', '', '', 1, 1, '', 'Balikpapan', 1, 'Balikpapan', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:32:00'),
	(19, NULL, 1, '00014/TKJ/SMK/14', 'Febri Siana', '123678', 'Banjar', '1994-02-04', 'P', 1, 'Jogja', '', '', '', '', 'Banjar', '', '', '', '', '9876', 'Yudi', 'Liana', 'banjar', '', '', '', '', 1, 1, '', 'Bajuri', 1, 'Banjar', '', '', '', '', '9876', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:41:22'),
	(20, NULL, 1, '00015/TKJ/SMK/14', 'Febri Sita Siana', '123679', 'Banjar', '1994-02-04', 'P', 1, 'Jogja', '', '', '', '', 'Banjar', '', '', '', '', '9876', 'Yudi', 'Liana', 'banjar', '', '', '', '', 1, 1, '', 'Bajuri', 1, 'Banjar', '', '', '', '', '9876', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:42:51'),
	(21, NULL, 1, '00016/TKJ/SMK/14', 'Dian Yunita', '5946594', 'Depok', '1995-03-03', 'P', 1, 'Depok', '', '', '', '', 'Depok', '', '', '', '', '53535', 'Yudi Atmaja', 'Yunita Sari', 'Depok Sleman', '', '', '', '', 1, 1, '', 'Yuni', 1, 'Depok Sleman', '', '', '', '', '73683965', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:44:56'),
	(22, NULL, 2, '00017/MM/SMK/14', 'Ariefan', '376483654', 'Semarang', '1996-03-03', 'L', 1, 'Semarang', '', '', '', '', 'Semarang', '', '', '', '', '123456', 'Depok', 'Jakarta', 'Semarang', '', '', '', '', 1, 1, '', 'Semarang', 1, 'Semarang', '', '', '', '', '43535', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:57:20'),
	(23, NULL, 4, '00018/PRWT/SMK/14', 'Dini', '3768358', 'Semarang', '1997-05-05', 'L', 1, 'Semarang', '', '', '', '', 'Semarang', '', '', '', '', '35363', 'Semarang', 'Semarang', 'Semarang', '', '', '', '', 1, 1, '', 'Semarang', 1, 'Semarang', '', '', '', '', '436464', 1, NULL, NULL, NULL, NULL, '1', '2014-12-25 22:59:42'),
	(24, NULL, 1, '00019/TKJ/SMK/15', 'Denok', '789456', 'Depok', '1996-02-03', 'L', 1, 'Depok', '', '', '', '', 'Depok', '', '', '', '', '123456', 'Deni', 'Yuni', 'Depok', '', '', '', '', 2, 1, '', 'Dunia', 3, 'Depok', '', '', '', '', '123456', 1, NULL, NULL, NULL, NULL, '1', '2015-01-02 17:30:17'),
	(25, NULL, 5, '00002/PRWT/SMK/15', 'Agasi Gilang', '7654321', 'Jogja', '1996-02-02', 'L', 1, 'Jogja', '', '', '', '', 'Jogja', '', '', '', '', '5457495784', 'Dunia', 'Diani', 'Jogja', '', '', '', '', 1, 2, '', 'Duniawi', 3, 'Jogja', '', '', '', '', '123456', 4, 'SMP 2 Wates', '34567890', 'Baik', 'Wates', '1', '2015-01-13 15:32:26'),
	(26, NULL, 6, '00003/PRWT/SMK/15', 'Duniawi Sekali', '333333', 'Bantul', '1995-05-05', 'P', 2, 'Bantul', '', '', '', '', 'Bantul', '', '', '', '', '88888', 'Ayaku', 'Ibuku', 'Bantul', '', '', '', '', 3, 3, '', 'Surgawi', 3, 'Mbantul', '', '', '', '', '99999', 4, 'SMP 3 Wates', '444444', 'baik', 'Wates', '1', '2015-01-13 15:38:17');
/*!40000 ALTER TABLE `calon_siswa` ENABLE KEYS */;

-- Dumping data for table psb_online.captcha: ~16 rows (approximately)
/*!40000 ALTER TABLE `captcha` DISABLE KEYS */;
INSERT INTO `captcha` (`captcha_id`, `captcha_time`, `ip_address`, `word`) VALUES
	(1, 1424064209, '127.0.0.1', 'Random word'),
	(2, 1424064272, '127.0.0.1', 'WoLQBKMj'),
	(3, 1424073309, '127.0.0.1', '9J3QzrMh'),
	(4, 1424073376, '127.0.0.1', 'GErYhlj3'),
	(5, 1424073438, '127.0.0.1', 'Bk89d1XQ'),
	(6, 1424073528, '127.0.0.1', 'tOFszid7'),
	(7, 1424073610, '127.0.0.1', 'qb94EG0V'),
	(8, 1424073628, '127.0.0.1', 'V566mLQA'),
	(9, 1424073753, '127.0.0.1', 'Hw126PQP'),
	(10, 1424073784, '127.0.0.1', '43M26cDx'),
	(11, 1424073882, '127.0.0.1', 'hjOJ9iBc'),
	(12, 1424073910, '127.0.0.1', 'NDwT0lii'),
	(13, 1424073970, '127.0.0.1', 'AyLkmCfw'),
	(14, 1424074085, '127.0.0.1', 'qYTGCw0b'),
	(15, 1424157068, '127.0.0.1', 'VyBOlM3j'),
	(16, 1424157079, '127.0.0.1', 'JspeKHc7'),
	(17, 1424157329, '127.0.0.1', 'CViVVtrS');
/*!40000 ALTER TABLE `captcha` ENABLE KEYS */;

-- Dumping data for table psb_online.groups: ~3 rows (approximately)
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;
INSERT INTO `groups` (`id`, `name`, `description`) VALUES
	(1, 'admin', 'Administrator'),
	(2, 'members', 'General User'),
	(3, 'group', 'group');
/*!40000 ALTER TABLE `groups` ENABLE KEYS */;

-- Dumping data for table psb_online.info: ~2 rows (approximately)
/*!40000 ALTER TABLE `info` DISABLE KEYS */;
INSERT INTO `info` (`id`, `title`, `info`, `timestamp`) VALUES
	(1, 'Info PSB SMK 3 Muhammadiyah 3 Wates', '<h3 style="box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; margin-top: 20px; margin-bottom: 10px; font-size: 24px;">Info PSB SMK 3 Muhammadiyah 3 Wates</h3>\n<ol style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-size: 14px; line-height: 20px;">\n<li style="box-sizing: border-box;">Pendaftaran dilakukan secara on line melalui website http://psb.smk3muhammadiyahwates.sch.id mulai tanggal 25 - 30 Juni 2014</li>\n<li style="box-sizing: border-box;">Penyerahan berkas dilakukan di SMK 3 Muhammadiyah 3 Wates tanggal 1 - 3 Juli 2014, tanggal 3 Juli 2014 pendaftaran ditutup pada pukul 15.00 wib</li>\n<li style="box-sizing: border-box;">Bawalah print out formulir pendaftaran beserta nomor calon pendaftaran disertakan berkas penunjang lain ke SMK 3 Muhammadiyah Wates</li>\n<li style="box-sizing: border-box;">Yang membawa berkas ke SMK 3 Muhammadiyah adalah para pendaftar, tidak boleh diwakili oleh siapa pun</li>\n<li style="box-sizing: border-box;">Operator akan kami layani pada jam kerja mulai tanggal 1 Juli 2014.</li>\n<li style="box-sizing: border-box;">Calon peserta didik yang mendaftar wajib mengenakan seragam SMP</li>\n<li style="box-sizing: border-box;">Pengumuman Hasil Penerimaan Peserta Didik Baru tanggal 5 Juli 2014</li>\n</ol>\n<h3 style="box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; margin-top: 20px; margin-bottom: 10px; font-size: 24px;">Berkas-Berkas Persyaratan Yang Harus Dibawa:</h3>\n<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; font-size: 14px; line-height: 20px;">\n<li style="box-sizing: border-box;">Fotokopi SKHU Legalisir 2 lembar, serta menunjukkan aslinya (apabila SKHU asli belum diterima maka dapat melampirkan SKHU sementara dengan Stempel Sekolah Asli)</li>\n<li style="box-sizing: border-box;">Bagi pendaftar yang berasal dari luar Wates wajib melampirkan surat rekomendasi dari Dinas Pendidikan Kabpuaten Wates</li>\n<li style="box-sizing: border-box;">Mengisi surat pernyataan bersedia melakukan tes narkoba ketika diterima di SMK 3 Muhammadiyah Wates</li>\n<li style="box-sizing: border-box;">Sertifikat kejuaraan akademik/non akademik tingkat Kota/Provinsi/Nasional (jika ada)</li>\n<li style="box-sizing: border-box;">Mendapatkan nomor pendaftaran dari panitia</li>\n<li style="box-sizing: border-box;">Yang membawa berkas ke SMK 3 Muhammadiyah adalah para pendaftar mengenakan seragam SMP, tidak boleh diwakili oleh siapa pun guna pengambilan foto di SMK 3 Muhammadiyah Wates</li>\n</ul>', '2015-01-15 18:55:16'),
	(2, 'Visi & Misi', '<h3 style="box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; margin-top: 20px; margin-bottom: 10px; font-size: 24px;">Visi</h3>\n<p><span style="color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">Dengan semangat pengabdian SMK 3 Muhammadiyah Wates bertekat untuk mempersiapkan dan mengantarkan siswanya menjadi yang &ldquo;BERTAQWA, TERDIDIK, BERKUALITAS DAN BERBUDAYA&rdquo; sehingga :</span></p>\n<ol style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">\n<li style="box-sizing: border-box;">Unggul di bidang iman dan taqwa ( imtaq )</li>\n<li style="box-sizing: border-box;">Unggul di bidang ilmu pengetahuan dan teknologi ( iptek )</li>\n<li style="box-sizing: border-box;">Unggul dalam prestasi.Visi tersebut di atas mencerminkan cita-cita sekolah ke depan dengan memperhatikan potensi yang dimiliki dan harapan masyarakat.</li>\n</ol>\n<h3 style="box-sizing: border-box; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-weight: 500; line-height: 1.1; color: #333333; margin-top: 20px; margin-bottom: 10px; font-size: 24px;">Misi</h3>\n<p><span style="color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">Untuk mewujudkan Visi tersebut sekolah menetapkan langkah-langkah strategis yang dinyatakan dalam indikator sebagai berikut:</span></p>\n<ul style="box-sizing: border-box; margin-top: 0px; margin-bottom: 10px; color: #333333; font-family: \'Helvetica Neue\', Helvetica, Arial, sans-serif; font-size: 14px; line-height: 20px;">\n<li style="box-sizing: border-box;">Menumbuhkan penghayatan terhadap ajaran agama Islam dan Budaya bangsa, sehingga menjadi sumber kearifan dalam bertindak</li>\n<li style="box-sizing: border-box;">Melaksanakan pembelajaran dan bimbingan secara efektif, sehingga setiap siswa dapat berkembang secara optimal, sesuai dengan potensi yang dimiliki.</li>\n<li style="box-sizing: border-box;">Mendorong dan membantu setiap siswa untuk mengenali potensi dirinya dibidang karya tulis, sehingga dapat dikembangkan secara lebih optimal.</li>\n<li style="box-sizing: border-box;">Mendorong dan membantu setiap siswa untuk mengenali poteensi dirinya dibidang olah raga, sehingga dapat dikembangkan secara lebih optimal.</li>\n<li style="box-sizing: border-box;">Mendorong dan membaantu setiap siswa untuk mengenali potensi dirinya dibidang seni, sehingga dapat dikembangkan secara lebih optimal.</li>\n<li style="box-sizing: border-box;">Menumbuhkan semangat keunggulan secara intensif kepada seluruh warga sekolah.</li>\n<li style="box-sizing: border-box;">Menerapkan manajemen partisipasif dengan melibatkan seluruh warga sekolah dan komite sekolah.</li>\n</ul>', '2015-01-15 18:56:26');
/*!40000 ALTER TABLE `info` ENABLE KEYS */;

-- Dumping data for table psb_online.kelas: ~0 rows (approximately)
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` (`id`, `kelas`) VALUES
	(5, 'X-1');
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;

-- Dumping data for table psb_online.login_attempts: ~0 rows (approximately)
/*!40000 ALTER TABLE `login_attempts` DISABLE KEYS */;
/*!40000 ALTER TABLE `login_attempts` ENABLE KEYS */;

-- Dumping data for table psb_online.mata_pelajaran: ~5 rows (approximately)
/*!40000 ALTER TABLE `mata_pelajaran` DISABLE KEYS */;
INSERT INTO `mata_pelajaran` (`id`, `mata_pelajaran`) VALUES
	(1, 'Bahasa Indonesia'),
	(2, 'Bahasa Inggris'),
	(3, 'Matematika'),
	(4, 'IPA'),
	(5, 'IPS aa');
/*!40000 ALTER TABLE `mata_pelajaran` ENABLE KEYS */;

-- Dumping data for table psb_online.nilai_un: ~84 rows (approximately)
/*!40000 ALTER TABLE `nilai_un` DISABLE KEYS */;
INSERT INTO `nilai_un` (`id`, `calon_siswa_id`, `mata_pelajaran_id`, `nilai`) VALUES
	(1, 1, 1, 90),
	(2, 1, 2, 90),
	(3, 1, 3, 85),
	(4, 1, 4, 80),
	(5, 7, 1, 90),
	(6, 7, 2, 95),
	(7, 7, 3, 70),
	(8, 7, 4, 100),
	(9, 8, 1, 90),
	(10, 8, 2, 90),
	(11, 8, 3, 95),
	(12, 8, 4, 95),
	(13, 9, 1, 50),
	(14, 9, 2, 90),
	(15, 9, 3, 83),
	(16, 9, 4, 95),
	(17, 10, 1, 70),
	(18, 10, 2, 90),
	(19, 10, 3, 75),
	(20, 10, 4, 95),
	(21, 11, 1, 87),
	(22, 11, 2, 92),
	(23, 11, 3, 95),
	(24, 11, 4, 91),
	(25, 12, 1, 90),
	(26, 12, 2, 91),
	(27, 12, 3, 95),
	(28, 12, 4, 96),
	(29, 13, 1, 89),
	(30, 13, 2, 90),
	(31, 13, 3, 95),
	(32, 13, 4, 94),
	(33, 14, 1, 90),
	(34, 14, 2, 90),
	(35, 14, 3, 95),
	(36, 14, 4, 95),
	(37, 15, 1, 90),
	(38, 15, 2, 90),
	(39, 15, 3, 95),
	(40, 15, 4, 95),
	(41, 16, 1, 90),
	(42, 16, 2, 90),
	(43, 16, 3, 95),
	(44, 16, 4, 95),
	(45, 17, 1, 90),
	(46, 17, 2, 90),
	(47, 17, 3, 95),
	(48, 17, 4, 95),
	(49, 18, 1, 90),
	(50, 18, 2, 90),
	(51, 18, 3, 95),
	(52, 18, 4, 95),
	(53, 19, 1, 100),
	(54, 19, 2, 100),
	(55, 19, 3, 90),
	(56, 19, 4, 96),
	(57, 20, 1, 100),
	(58, 20, 2, 100),
	(59, 20, 3, 90),
	(60, 20, 4, 96),
	(61, 21, 1, 100),
	(62, 21, 2, 100),
	(63, 21, 3, 100),
	(64, 21, 4, 100),
	(65, 22, 1, 90),
	(66, 22, 2, 90),
	(67, 22, 3, 90),
	(68, 22, 4, 90),
	(69, 23, 1, 90),
	(70, 23, 2, 90),
	(71, 23, 3, 90),
	(72, 23, 4, 90),
	(73, 24, 1, 100),
	(74, 24, 2, 90),
	(75, 24, 3, 90),
	(76, 24, 4, 89),
	(77, 25, 1, 60),
	(78, 25, 2, 70),
	(79, 25, 3, 80),
	(80, 25, 4, 90),
	(81, 26, 1, 90),
	(82, 26, 2, 80),
	(83, 26, 3, 70),
	(84, 26, 4, 60);
/*!40000 ALTER TABLE `nilai_un` ENABLE KEYS */;

-- Dumping data for table psb_online.pekerjaan: ~3 rows (approximately)
/*!40000 ALTER TABLE `pekerjaan` DISABLE KEYS */;
INSERT INTO `pekerjaan` (`id`, `pekerjaan`) VALUES
	(1, 'Petani'),
	(2, 'Nelayan'),
	(3, 'Pengusaha');
/*!40000 ALTER TABLE `pekerjaan` ENABLE KEYS */;

-- Dumping data for table psb_online.prestasi: ~84 rows (approximately)
/*!40000 ALTER TABLE `prestasi` DISABLE KEYS */;
INSERT INTO `prestasi` (`id`, `calon_siswa_id`, `prestasi`) VALUES
	(1, 1, 'Juara 1'),
	(2, 1, ''),
	(3, 1, ''),
	(4, 1, ''),
	(5, 7, 'Juara 1'),
	(6, 7, 'Juara 3'),
	(7, 7, ''),
	(8, 7, ''),
	(9, 8, 'Juara 1'),
	(10, 8, ''),
	(11, 8, ''),
	(12, 8, ''),
	(13, 9, 'Juara 1'),
	(14, 9, ''),
	(15, 9, ''),
	(16, 9, ''),
	(17, 10, 'Juara 1'),
	(18, 10, ''),
	(19, 10, ''),
	(20, 10, ''),
	(21, 11, 'Juara 1'),
	(22, 11, ''),
	(23, 11, ''),
	(24, 11, ''),
	(25, 12, 'Juara 1'),
	(26, 12, ''),
	(27, 12, ''),
	(28, 12, ''),
	(29, 13, 'Juara 1'),
	(30, 13, ''),
	(31, 13, ''),
	(32, 13, ''),
	(33, 14, 'Juara 1'),
	(34, 14, ''),
	(35, 14, ''),
	(36, 14, ''),
	(37, 15, 'Juara 1'),
	(38, 15, ''),
	(39, 15, ''),
	(40, 15, ''),
	(41, 16, 'Juara 1'),
	(42, 16, ''),
	(43, 16, ''),
	(44, 16, ''),
	(45, 17, 'Juara 1'),
	(46, 17, ''),
	(47, 17, ''),
	(48, 17, ''),
	(49, 18, 'Juara 1'),
	(50, 18, ''),
	(51, 18, ''),
	(52, 18, ''),
	(53, 19, 'Juara 3'),
	(54, 19, 'Juara 4'),
	(55, 19, ''),
	(56, 19, ''),
	(57, 20, 'Juara 3'),
	(58, 20, 'Juara 4'),
	(59, 20, 'Juara 1'),
	(60, 20, ''),
	(61, 21, 'Juara 1 Cerdas Cermat'),
	(62, 21, ''),
	(63, 21, ''),
	(64, 21, ''),
	(65, 22, ''),
	(66, 22, ''),
	(67, 22, ''),
	(68, 22, ''),
	(69, 23, ''),
	(70, 23, ''),
	(71, 23, ''),
	(72, 23, ''),
	(73, 24, 'Juara 1'),
	(74, 24, ''),
	(75, 24, ''),
	(76, 24, ''),
	(77, 25, 'Juara 1 makan krupuk'),
	(78, 25, ''),
	(79, 25, ''),
	(80, 25, ''),
	(81, 26, 'Prestasi1'),
	(82, 26, ''),
	(83, 26, ''),
	(84, 26, '');
/*!40000 ALTER TABLE `prestasi` ENABLE KEYS */;

-- Dumping data for table psb_online.program_keahlian: ~6 rows (approximately)
/*!40000 ALTER TABLE `program_keahlian` DISABLE KEYS */;
INSERT INTO `program_keahlian` (`id`, `program_keahlian`, `kode`) VALUES
	(1, 'Teknik Komputer Jaringan', 'TKJ'),
	(2, 'Multimedia', 'MM'),
	(3, 'Teknik Kendaraan Ringan', 'TKR'),
	(4, 'Keperawatan', 'PRWT'),
	(5, 'Teknik Sipil', 'TSP'),
	(6, 'Tata Boga', 'TBG');
/*!40000 ALTER TABLE `program_keahlian` ENABLE KEYS */;

-- Dumping data for table psb_online.sekolah: ~3 rows (approximately)
/*!40000 ALTER TABLE `sekolah` DISABLE KEYS */;
INSERT INTO `sekolah` (`id`, `nama`, `npsn`, `status`, `alamat`) VALUES
	(1, 'SMP 1 Wates', '123456', NULL, NULL),
	(2, 'SMP 2 Watesa', '56522', 'blaaa', 'blaaa'),
	(4, 'Lain-lain', '1123456', 'shsdh', 'gsg');
/*!40000 ALTER TABLE `sekolah` ENABLE KEYS */;

-- Dumping data for table psb_online.siswa: ~0 rows (approximately)
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` (`id`, `users_id`, `program_keahlian_id`, `no_pendaftaran`, `kelas_id`, `nama`, `nisn`, `nisn_smp`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama_id`, `alamat`, `alamat_jogja`, `no_telepon`, `ayah`, `ibu`, `alamat_ortu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `no_telepon_ortu`, `wali`, `pekerjaan_wali`, `alamat_wali`, `no_telepon_wali`, `sekolah_id`, `sekolah_asal`, `npsn`, `sekolah_status`, `sekolah_alamat`, `status`, `waktu_daftar`) VALUES
	(28, NULL, 1, '00019/TKJ/SMK/15', 5, 'Denok', '789456', NULL, 'Depok', '1996-02-03', 'L', 1, 'Depok', 'Depok', '123456', 'Deni', 'Yuni', 'Depok', 2, 1, '', 'Dunia', 3, 'Depok', '123456', 1, NULL, NULL, NULL, NULL, 'N', '2015-01-15 16:12:38');
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;

-- Dumping data for table psb_online.tes_kesehatan: ~2 rows (approximately)
/*!40000 ALTER TABLE `tes_kesehatan` DISABLE KEYS */;
INSERT INTO `tes_kesehatan` (`id`, `calon_siswa_id`, `penguji1`, `penguji2`, `tinggi_badan`, `berat_badan`, `cacat_fisik`, `penglihatan`, `buta_warna`, `pendengaran`, `pendengaran_telinga_kanan`, `pendengaran_telinga_kiri`, `motivasi`, `kesimpulan`) VALUES
	(1, 24, 'Sayaaa', 'Sendiriiii', 199, 99, 'N', 'N', 'N', 'N', 'N', 'N', 'Cukup baik', 'Baik sekali'),
	(2, 25, ';dsgsgh', ';hgw;hg', 165, 55, 'N', 'Y', 'N', 'Y', 'Y', 'Y', 'dlsgdlh', 'fs;gh');
/*!40000 ALTER TABLE `tes_kesehatan` ENABLE KEYS */;

-- Dumping data for table psb_online.users: ~11 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
	(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1421758845, 1, 'Admin', 'istrator', 'ADMIN', '0'),
	(2, '127.0.0.1', 'dedek', '$2y$08$ilxvLL3GsZLJ8K4neInCXu3wO//DK2B1wpegiwKOSXXLa7NUOCGT2', NULL, 'dedel@dedel.com', NULL, NULL, NULL, NULL, 1419936889, 1419936889, 1, 'dedek', NULL, NULL, NULL),
	(3, '127.0.0.1', 'agasigp', '$2y$08$DNx0S6pSZ9HjsS3C390fbOrTxtNWPPA4OeN8J63ng10/Ij.ep4Cre', NULL, 'agasigp@live.com', NULL, NULL, NULL, NULL, 1419937018, 1419937018, 1, NULL, NULL, NULL, NULL),
	(4, '127.0.0.1', 'gilang', '$2y$08$L5Gdgd010HIATnEeuSP.k.35MtkGApSv9QPy1f4YILanWMHNof5q2', NULL, 'gilang@gilang.com', NULL, NULL, NULL, NULL, 1419937180, 1419937180, 1, NULL, NULL, NULL, NULL),
	(5, '127.0.0.1', 'persada', '$2y$08$p5xiJvaWwz0xp2giLEPIkOe/IRwlJNvq8625ee.KLaRmmCfgfwKg2', NULL, 'persada@gilang.com', NULL, NULL, NULL, NULL, 1419937427, 1419937427, 1, NULL, NULL, NULL, NULL),
	(6, '127.0.0.1', 'gilanggp', '$2y$08$ceoH6qtyQOQEl3nDPxRMK.H6M/lrBxGFr60PDRqRttmIPmMVRzAu6', NULL, 'gilanggp@yahoo.com', NULL, NULL, NULL, NULL, 1419944791, 1419944791, 1, NULL, NULL, NULL, NULL),
	(7, '127.0.0.1', 'yahoo', '$2y$08$3WtIwHDllgeUZvbXzVy40.D7PTjHRjlXjnkpvehYPvHvO9SsF.K3i', NULL, 'yahho@yahoo.com', NULL, NULL, NULL, NULL, 1419945003, 1419945003, 1, NULL, NULL, NULL, NULL),
	(8, '127.0.0.1', 'goglr', '$2y$08$5JmB2XqL7ck9FHvYQLMkju29n0Xey2Jv69hYfMVanO3xWZA9Tg4me', NULL, 'google@google.com', NULL, NULL, NULL, NULL, 1419945167, 1419945167, 1, NULL, NULL, NULL, NULL),
	(9, '127.0.0.1', 'depok', '$2y$08$TuJxru.BS8n0PRp0yL.TieCsKf5jaFDxj9cHVtw5cqOy334W2IzdC', NULL, 'depok@depok.com', NULL, NULL, NULL, NULL, 1419945442, 1419945442, 1, NULL, NULL, NULL, NULL),
	(10, '127.0.0.1', 'benedmunds', '$2y$08$tXAhTfCJsJOMvGK49xchs.a3/OhDQPTO4ccdswHsSyhIWFBn8Kx8K', NULL, 'benedmunds@benedmunds.com', NULL, NULL, NULL, NULL, 1419945890, 1419945890, 1, 'benedmunds', NULL, NULL, NULL),
	(11, '127.0.0.1', 'benedmundsa', '0', NULL, 'benedmunds@benedmunds.coma', NULL, NULL, NULL, NULL, 1419949625, 1419949625, 1, 'benedmundsa', NULL, NULL, NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Dumping data for table psb_online.users_groups: ~14 rows (approximately)
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;
INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
	(1, 1, 1),
	(2, 1, 2),
	(3, 2, 2),
	(4, 3, 2),
	(5, 4, 2),
	(6, 5, 2),
	(7, 6, 2),
	(8, 7, 2),
	(9, 8, 2),
	(10, 9, 2),
	(11, 10, 1),
	(12, 10, 2),
	(13, 11, 1),
	(14, 11, 2);
/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
