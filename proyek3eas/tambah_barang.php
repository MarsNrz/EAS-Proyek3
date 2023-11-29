<?php

    include 'libraries/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nama_barang        = $_POST['nama_barang'];
        $satuan             = $_POST['satuan'];
        $harga_satuan       = $_POST['harga_satuan'];
        $stok               = $_POST['stok'];

        $sql = "INSERT INTO barang (nama_barang, satuan, harga_satuan, stok)
        VALUES ('$nama_barang', '$satuan', '$harga_satuan', '$stok')";

        $mysqli-> query($sql) or die ($mysqli->error);

        header("location:index.php");
    }

    include 'views/v_tambah_barang.php';

?>