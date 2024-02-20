<?php
include '../../config/koneksi.php';

$no_antri = $_POST['no_antri'];
$nama = htmlspecialchars($_POST['nama']);
$jns_kelamin = $_POST['jns_kelamin'];
$umur = $_POST['umur'];
$tgl = $_POST['tgl'];
$alamat = $_POST['alamat'];

$simpan = mysqli_query($koneksi, "INSERT INTO murid VALUES('$no_antri', '$nama', '$jns_kelamin', '$tgl', '$umur', '$alamat')");

if ($simpan) {
    # code...
    echo '<script>alert("Data Berhasil Di Tambah !!!"); window.location.href="../../index.php?page=data_siswa"</script>';
}else {
    echo '<script>alert("Data Gagal Di Tambah !!!"); window.location.href="../../index.php?page=data_siswa"</script>';
}

mysqli_close($koneksi);
?>
