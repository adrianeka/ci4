<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <br>
    <div class="container">
        <div class="card w-50 mx-auto">
            <div class="card-body">
                <h2 class="text-center">Login</h2>
                <form action="<?= base_url('/authentication') ?>" method="post" enctype="multipart/form-data">
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger">
                            <?php echo session()->getFlashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <div class="mb-3">
                        <label for="inputUsername" class="form-label">
                            Username
                        </label>
                        <input type="text" name="username" class="form-control" value="<?php echo session()->getFlashdata('username') ?>" id="inputUsername" placeholder="Masukkan Username..." required>
                    </div>
                    <div class="mb-3">
                        <label for="inputPassword" class="form-label">
                            Password
                        </label>
                        <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Masukkan Password..." required>
                    </div>
                    <div class="mb-3 text-center"><input type="submit" name="login" class="btn btn-primary" value="LOGIN"></div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>