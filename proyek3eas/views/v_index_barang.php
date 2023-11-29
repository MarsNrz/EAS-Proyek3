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

    .tombol-tambah-barang {
        display: inline-block;
        text-decoration: none;
        color: #fff;
        border: 1px solid #060d5a;
        padding: 12px 34px;
        font-size: 13px;
        background: transparent;
        position: relative;
        cursor: pointer;
    }

    .tombol-tambah-barang:hover {
        border: 1px solid #060d5a;
        color: #fff;
        background: #060d5a;
        transition: 1s;
    }
</style>

<body>

    <nav class="header">
        <label class="logo">
            <h1>PUJASERA</h1>
        </label>
        <table class="menu">
            <tr>
                <td><a href="index.php">HOME</a></td>
                <td><a href="#">DATA BARANG</a></td>
                <td><a href="index_kasir.php">DATA KASIR</a></td>
                <td><a href="index_tenan.php">DATA TENAN</a></td>
            </tr>
        </table>
    </nav>

    <div>
        <a href="v_tambah_barang.php" class="tombol-tambah-barang">Tambah Data</a>
        <section class="awalan">
            <table border="1" class="data">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Harga Satuan</th>
                        <th>Stok</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        $i = 1;
                        while ($barang = $data_barang->fetch_array()) {
                    ?>

                        <tr>
                            <td><? echo $i++; ?></td>
                            <td><? echo $barang ['nama_barang']; ?></td>
                            <td><? echo $barang ['satuan']; ?></td>
                            <td><? echo $barang ['harga_satuan']; ?></td>
                            <td><? echo $barang ['stok']; ?></td>
                        </tr>

                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </div>

    
</body>

</html>