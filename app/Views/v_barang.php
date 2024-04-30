<?php $this->extend('v_template') ?>
<?php $this->section('content') ?>
<center>
    <br>
    <div class="row">
        <div class="col-1">
            <button class="btn btn-info"><a href="<?php echo base_url('barang/inputForm') ?>">Input</a></button>
        </div>
        <div class="col-11">
            <form action="<?php echo base_url('barang/search'); ?>" method="post">
                <input type="text" id="nama" name="nama">
                <input type="submit" value="SEARCH">
            </form>
        </div>
    </div>
    <br>
    <table border="1" class="table table-striped table-bordered table-info">
        <tr class="">
            <th>kode</th>
            <th>foto</th>
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
                <td>
                    <?php if (!empty($row['foto'])) : ?>
                        <img src="/path/to/upload/directory/<?= $row['foto'] ?>" alt="foto Barang" width="100">
                    <?php else : ?>
                        <span>Tidak ada gambar</span>
                    <?php endif; ?>
                </td>
                <td><?php echo $row['nama_brg']; ?></td>
                <td><?php echo $row['harga']; ?></td>
                <td>
                    <a href="<?php echo base_url('barang/detail/' . $row['kode']); ?>"> DETAIL</a>
                </td>
            </tr>
        <?php endforeach; ?>
        <?php
        // endfor; 
        ?>
    </table>
</center>
<?php $this->endSection(); ?>