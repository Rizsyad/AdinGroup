<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Pelanggan</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="vh-100 d-flex justify-content-center align-items-center">
            <div class="col-md-4 p-5 shadow-sm border rounded-3">
                <h2 class="text-center mb-4 text-primary">Pelanggan</h2>
                <?php $validation = \Config\Services::validation(); ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control border border-primary" id="name" aria-describedby="nameHelp" name="nama">
                         <?php if($validation->getError('nama')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('nama'); ?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="mb-3">
                        <label for="notlpn" class="form-label">No Telp.</label>
                        <input type="text" class="form-control border border-primary" id="notlpn" name="notlpn">
                        <?php if($validation->getError('notlpn')) {?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('notlpn'); ?>
                            </div>
                        <?php }?>
                    </div>
                    <div class="d-grid">
                        <button class="btn btn-primary" type="submit">Login / Register</button>
                    </div>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>