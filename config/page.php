<?php
include "koneksi.php";
if ( isset($_GET['page']) ){
	$page=$_GET['page'];

	switch ($page) {
		case '':
		include 'pages/dashboard.php';
		break;

		case 'data_petugas':
		include "pages/petugas/data_petugas.php";
		break;

		case 'detail_petugas':
		include "pages/petugas/detail_petugas.php";
		break;

		case 'tambah_petugas':
		include "pages/petugas/tambah_petugas.php";
		break;

		case 'ubah_petugas':
		include "pages/petugas/ubah_petugas.php";
		break;

		case 'data_siswa':
		include "pages/siswa/data_siswa.php";
		break;

		case 'detail_siswa':
		include "pages/siswa/detail_siswa.php";
		break;

		case 'hapus_siswa':
		include "pages/siswa/hapus_siswa.php";
		break;

		case 'tambah_siswa':
		include "pages/siswa/tambah_siswa.php";
		break;

		case 'ubah_siswa':
		include "pages/siswa/ubah_siswa.php";
		break;

		case 'data_pendataan':
		include "pages/pendataan/data_pendataan.php";
		break;

		case 'tambah_pendataan':
		include "pages/pendataan/tambah_pendataan.php";
		break;

		case 'detail_pendataan':
		include "pages/pendataan/detail_pendataan.php";
		break;

		case 'ubah_pendataan':
		include "pages/pendataan/ubah_pendataan.php";
		break;
	} 
	
}else{
	include 'pages/dashboard.php';
}
?>