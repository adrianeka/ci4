<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>

<body>
    <h1>Data Barang</h1>
    <!-- Search -->
    <form action="<?php echo base_url('Brg/search'); ?>" method="post">
        <input type="text" id="nama" name="nama">
        <input type="submit" value="SEARCH">
    </form>
    <br>
    <button><a href="<?php echo base_url('Brg/create'); ?>">Input</a></button>
    <br><br>
    <table border="1">
        <tr>
            <th>kode</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
        <?php
        // for ($i = 0; $i < 2; $i++) :
        foreach ($data as $row) :
        ?>
            <tr>
                <td><?php echo $row['kode']; ?></td>
                <td><?php echo $row['nama_brg']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td>
                    <a href="">VIEW </a>|
                    <a href="<?php echo base_url('Brg/delete/' . $row['kode']); ?>"> DELETE</a>|
                    <a href="<?php echo base_url('Brg/edit/' . $row['kode']); ?>">EDIT</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php
        // endfor; 
        ?>
    </table>
</body>

</html>