<?php

    include 'libraries/database.php';

    $sql = "select * from nota";
    $data_nota = $mysqli->query($sql);
    //query adalah pesan yang diminta ke database

    include 'views/v_index.php';

?>