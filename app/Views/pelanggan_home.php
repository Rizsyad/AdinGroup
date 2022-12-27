<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan | Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
  <!-- Jumbotron -->
  <div class="bg-image p-5 text-center shadow-1-strong text-white"
    style="background-image: url('https://mdbcdn.b-cdn.net/img/new/slides/003.webp');">
    <h1 class="mb-3 h2">Adin Coffe</h1>
    <p>
      Silahkan pesan sesuai keinginan anda
    </p>
  </div>
  <!-- Jumbotron -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Adin Coffe</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('/daftar-menu')?>">Daftar Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url('/orders')?>">Pesanan Anda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container">
      <div class="text-center">
        <h1 class="text-bold mt-4">Adin Coffe</h1>
        <p>Buka Jam <b>16:00 - 22:00</b></p>
      </div>

      <div class="row mb-5 mt-5">
        <div class="col-md-6 d-flex justify-content-end">
            <a href="<?=base_url('/daftar-menu')?>" class="btn btn-primary">Lihat daftar Menu</a>
        </div>
        <div class="col-md-6 d-flex justify-content-start">
            <a href="<?=base_url('/orders')?>" class="btn btn-primary">Lihat Pesanan</a>
        </div>
      </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>