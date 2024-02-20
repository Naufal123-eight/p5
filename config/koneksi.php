<?php 
    $koneksi = mysqli_connect( '192.168.8.177', 'root', '', 'dbp5');
    if (!$koneksi) {
        echo "koneksi ke database gagal";
    }
?>