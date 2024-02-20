<?php 
include "../../config/koneksi.php";

$no_antri = $_POST['no_antri'];
$nama = $_POST['nama'];
$jns_kelamin = $_POST['jns_kelamin'];
$tgl = $_POST['tgl'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];

$ubah = mysqli_query($koneksi , "UPDATE murid SET nama='$nama', jenis_kelamin='$jns_kelamin', tanggal_lahir='$tgl', umur='$umur', alamat='$alamat' WHERE no_antrian='$no_antri'");
if ($ubah)
{
	echo '<script>alert("Data Berhasil Di Ubah !!!");
	window.location.href="../../index.php?page=data_siswa"</script>';
}else {
	echo '<script>alert("Data Gagal Di Ubah !!!");
	window.location.href="../../index.php?page=data_siswa"</script>';
}
?>