<?php $this->extend('v_template') ?>
<?php $this->section('content') ?>
<table>
    <h1 class="text-center">Input Barang</h1>
    <form action="<?php echo base_url('barang/input'); ?>" method="post" enctype="multipart/form-data">
        <label for="kode" class="form-label">Kode:</label><br>
        <input type="text" id="kode" name="kode" class="form-control"><br>
        <label for="nama" class="form-label">Nama Barang:</label><br>
        <input type="text" id="nama" name="nama" class="form-control"><br>
        <label for="harga" class="form-label">Harga:</label><br>
        <input type="text" id="harga" name="harga" class="form-control">
        <input type="file" id="gambar" name="gambar" class="form-control-file mt-4"><br>
        <input type="submit" class="btn btn-success form-control mt-4" value="Submit">
        <button class="btn btn-danger form-control mt-2"><a href="/barang" style="text-decoration: none; color: inherit;">Kembali</a></button>
    </form>
</table>
<?php $this->endSection(); ?>