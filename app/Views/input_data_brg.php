<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
</head>

<body>
    <h1>Input Barang</h1>
    <form action="<?php echo base_url('Brg/store'); ?>" method="post">
        <label for="kode">Kode:</label><br>
        <input type="text" id="kode" name="kode"><br>
        <label for="nama">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga"><br><br>
        <button><a href="/Brg">Kembali</a></button>
        <input type="submit" value="Submit">
    </form>
</body>

</html>