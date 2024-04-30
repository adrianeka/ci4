<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Barang</title>
</head>

<body>
    <h1>Update Barang</h1>
    <form action="<?php echo base_url('Brg/update'); ?>" method="post">
        <label for="kode">Kode:</label><br>
        <input type="text" id="kode" name="kode" value="<?php echo $barang['kode']; ?>" readonly><br>
        <label for="nama">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama" value="<?php echo $barang['nama_brg']; ?>"><br>
        <label for="harga">Harga:</label><br>
        <input type="text" id="harga" name="harga" value="<?php echo $barang['harga']; ?>"><br><br>
        <button><a href="/Brg">Kembali</a></button>
        <input type="submit" value="Update">
    </form>
</body>

</html>