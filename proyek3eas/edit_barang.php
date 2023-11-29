<?php

    include 'libraries/database.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nama_barang        = $_POST['nama_barang'];
        $satuan             = $_POST['satuan'];
        $harga_satuan       = $_POST['harga_satuan'];
        $stok               = $_POST['stok'];

        $sql = "UPDATE barang SET 
                    nama_barang = '$nama_barang', 
                    satuan = '$satuan', 
                    harga_satuan = '$harga_satuan', 
                    stok = '$stok'
                    WHERE id_barang = '$id_barang'";

        $mysqli-> query($sql) or die ($mysqli->error);

        header("location:index_barang.php");
    }

    $id_barang = $_GET['id'];

    $sql = "select * from barang where id_barang = '$id_barang'";
    $q = $mysqli->query($sql);
    //query adalah pesan yang diminta ke database
    $data = $q->fetch_array();

    //cek jika data dari database kosong, maka kembali ke home (index.php)
    if (empty($data)) {
        header("location:index.php");
    }

    include 'views/v_tambah_barang.php';

?>