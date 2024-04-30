<?php $this->extend('v_template') ?>
<?php $this->section('content') ?>
<center>
    <p>Kode Barang : <?php echo $barang['kode']; ?></p>
    <p>Nama Barang : <?php echo $barang['nama_brg']; ?></p>
    <p>Harga : <?php echo $barang['harga']; ?></p>
    <p>Deskripsi : <?php echo $barang['deskripsi']; ?></p>

</center>
<?php $this->endSection(); ?>