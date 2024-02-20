<?php 

include "../../config/koneksi.php";

$id_pendataan=$_GET['id_pendataan'];

$hapus=mysqli_query($koneksi,"DELETE FROM pendataan WHERE id_pendataan='$id_pendataan'");

if ($hapus)
{
	echo '<script>alert("Data Berhasil Di Hapus !!!");
	window.location.href="../../index.php?page=data_pendataan"</script>';
}else {
	echo '<script>alert("Data Gagal Di Hapus !!!");
	window.location.href="../../index.php?page=data_pendataan"</script>';
}
 ?>