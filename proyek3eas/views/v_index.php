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
        <table border="1" class="data">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Tenan</th>
                    <th>Kode Kasir</th>
                    <th>Tanggal</th>
                    <th>Jam</th>
                    <th>Jumlah Belanja</th>
                    <th>Diskon</th>
                    <th>Total Harga</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    $i = 1;
                    while ($nota = $data_nota->fetch_array()) {
                ?>

                    <tr>
                        <td><? echo $i++; ?></td>
                        <td><? echo $nota ['kode_tenan']; ?></td>
                        <td><? echo $nota ['kode_kasir']; ?></td>
                        <td><? echo $nota ['tgl_nota']; ?></td>
                        <td><? echo $nota ['jam_nota']; ?></td>
                        <td><? echo $nota ['jumlah_belanja']; ?></td>
                        <td><? echo $nota ['diskon']; ?></td>
                        <td><? echo $nota ['total']; ?></td>
                    </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
    </section>
    
</body>

</html>