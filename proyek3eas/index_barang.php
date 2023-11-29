<?php

    include 'libraries/database.php';

    $sql = "select * from barang";
    $data_barang = $mysqli->query($sql);
    //query adalah pesan yang diminta ke database

    include 'views/v_index_barang.php';

?>