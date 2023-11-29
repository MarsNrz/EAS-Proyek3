<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body {
        background-image: url(bg.jpg);
        background-repeat: no-repeat;
        background-size: 1280px;
    }

    .header {
        background-color: steelblue;
        color: white;
    }

    .logo {
        font-size: 30px;
    }

    .menu {
        float: right;
        margin: 0 5px;
        padding: 10 10px;
        color: white;
        text-decoration: none;
        display: block;
    }

    .awalan {
        color: white;
    }
</style>

<?php
    $action = 'tambah_barang.php';

    if (!empty($id_user)){
        $action = 'edit_barang.php';
    }
?>

<body>

    <nav class="header">
        <label class="logo">
            <h1>PUJASERA</h1>
        </label>
        <table class="menu">
            <tr>
                <td><a href="#">HOME</a></td>
                <td><a href="index_barang.php">DATA BARANG</a></td>
                <td><a href="index_kasir.php">DATA KASIR</a></td>
                <td><a href="index_tenan.php">DATA TENAN</a></td>
            </tr>
        </table>
    </nav>

    <section class="awalan">
        <form action="" method="post">
            <table>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?= @$data['nama_barang']?>"></td>
            </tr>
            <tr>
                <td>Satuan</td>
                <td><input type="text" name="satuan" value="<?= @$data['satuan']?>"></td>
            </tr>
            <tr>
                <td>Harga Satuan</td>
                <td><input type="text" name="harga_satuan" value="<?= @$data['harga_satuan']?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?= @$data['stok']?>"></td>
            </tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr>
                <td></td>
                <td class="simpan"><input type="submit" name="Simpan"></td>
            </tr>
            </table>
        </form>
    </section>
    
</body>

</html>