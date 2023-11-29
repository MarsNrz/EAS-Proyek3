<?php

    include 'libraries/database.php';

    $sql = "select * from tenan";
    $data_tenan = $mysqli->query($sql);
    //query adalah pesan yang diminta ke database

    include 'views/v_index_tenan.php';

?>