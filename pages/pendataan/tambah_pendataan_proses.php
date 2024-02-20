<?php
include '../../config/koneksi.php';

$no_antri = $_POST['no_antri'];
$tinggi = $_POST['tinggi'];
$berat = $_POST['berat'];
$td = $_POST['td'];
$hb = $_POST['hb'];


$simpan = mysqli_query($koneksi, "INSERT INTO pendataan VALUES(NULL, '$no_antri', '$tinggi', '$berat', '$td', '$hb')");

if ($simpan) {
    # code...
    echo '<script>alert("Data Berhasil Di Tambah !!!"); window.location.href="../../index.php?page=data_pendataan"</script>';
}else {
    echo '<script>alert("Data Gagal Di Tambah !!!"); window.location.href="../../index.php?page=data_pendataan"</script>';
}

mysqli_close($koneksi);
?>
