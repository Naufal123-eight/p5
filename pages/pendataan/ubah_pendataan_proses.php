<?php 
include "../../config/koneksi.php";
$id = $_POST['id'];
$no_antri = $_POST['no_antri'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];
$td = $_POST['td'];
$hb = $_POST['hb'];


$ubah = mysqli_query($koneksi , "UPDATE pendataan SET no_antrian='$no_antri', tinggi_badan='$tinggi', berat_badan='$berat', tekanan_darah='$td', hb='$hb' WHERE id_pendataan='$id'");
if ($ubah)
{
	echo '<script>alert("Data Berhasil Di Ubah !!!");
	window.location.href="../../index.php?page=data_pendataan"</script>';
}else {
	echo '<script>alert("Data Gagal Di Ubah !!!");
	window.location.href="../../index.php?page=data_pendataan"</script>';
}
?>