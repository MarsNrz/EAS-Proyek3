<?php

    session_start(); //harus selalu ada untuk awalan

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "pujasera"; //databasenya

    $mysqli = mysqli_connect ($host, $user, $password, $db)
        or die ("Tidak dapat terhubung ke database");

?>