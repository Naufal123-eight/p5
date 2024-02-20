<?php 

include "../../config/koneksi.php";

$no_antrian=$_GET['no_antrian'];

$hapus=mysqli_query($koneksi,"DELETE FROM murid WHERE no_antrian='$no_antrian'");

if ($hapus)
{
	echo '<script>alert("Data Berhasil Di Hapus !!!");
	window.location.href="../../index.php?page=data_siswa"</script>';
}else {
	echo '<script>alert("Data Gagal Di Hapus !!!");
	window.location.href="../../index.php?page=data_siswa"</script>';
}
 ?>