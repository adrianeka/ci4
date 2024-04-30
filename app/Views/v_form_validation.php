<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1 class="text-center mt-5">Form Validation</h1>
        <form action="<?php echo base_url('validation'); ?>" method="post">
            <?php if (session('errors')) : ?>
                <div class="alert alert-danger mt-4">
                    <ul>
                        <?php foreach (session('errors') as $error) : ?>
                            <li><?php echo esc($error) ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            <?php endif ?>
            <?php if (session('success')) : ?>
                <div class="alert alert-success mt-4"><?php echo session('success') ?>
                </div>
            <?php endif ?>


            <label for="nip" class="form-label">NIP</label><br>
            <input type="number" id="nip" name="nip" class="form-control" value="<?php echo old('nip'); ?>"><br>
            <label for="nama" class="form-label">Nama Lengkap</label><br>
            <input type="text" id="nama" name="nama" class="form-control" value="<?php echo old('nama'); ?>"><br>
            <label for="tgl_lahir" class="form-label">Tanggal Lahir</label><br>
            <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control" value="<?php echo old('tgl_lahir'); ?>">
            <label for="gender" class="form-label">Gender</label><br>
            <input class="form-check-input" type="radio" name="gender" id="gender1" value="laki-laki" <?php if (old('gender') === 'laki-laki') echo 'checked'; ?>>
            <label class="form-check-label" for="gender1">
                Laki - Laki
            </label>
            <input class="form-check-input" type="radio" name="gender" id="gender2" value="perempuan" <?php if (old('gender') === 'perempuan') echo 'checked'; ?>>
            <label class="form-check-label" for="gender2">
                Perempuan
            </label><br>
            <label for="pendidikan" class="form-label">Pendidikan</label><br>
            <select name="pendidikan" id="pendidikan" class="form-select">
                <option value="" disabled>Pilih Pendidikan</option>
                <option value="SD" <?php if (old('pendidikan') === 'SD') echo 'selected'; ?>>SD</option>
                <option value="SMP" <?php if (old('pendidikan') === 'SMP') echo 'selected'; ?>>SMP</option>
                <option value="SMA" <?php if (old('pendidikan') === 'SMA') echo 'selected'; ?>>SMA</option>
                <option value="D3" <?php if (old('pendidikan') === 'D3') echo 'selected'; ?>>D3</option>
                <option value="D4" <?php if (old('pendidikan') === 'D4') echo 'selected'; ?>>D4</option>
                <option value="S1" <?php if (old('pendidikan') === 'S1') echo 'selected'; ?>>S1</option>
                <option value="S2" <?php if (old('pendidikan') === 'S2') echo 'selected'; ?>>S2</option>
            </select><br>
            <label for="no_hp" class="form-label">No HP</label><br>
            <input type="number" id="no_hp" name="no_hp" class="form-control" value="<?php echo old('no_hp'); ?>"><br>
            <label for="email" class="form-label">Email</label><br>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo old('email'); ?>"><br>
            <input type="submit" class="btn btn-primary form-control mt-4" value="Submit">
        </form>
    </div>
</body>

</html>