<?php

    include 'libraries/database.php';

    $sql = "select * from kasir";
    $data_kasir = $mysqli->query($sql);
    //query adalah pesan yang diminta ke database

    include 'views/v_index_kasir.php';

?>