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
            <a class="nav-link  <?= $menuActive == 'home' ? 'active' : ''?>" aria-current="page" href="<?=base_url('/home')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $menuActive == 'daftarMenu' ? 'active' : ''?>" href="<?=base_url('/daftar-menu')?>">Daftar Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?= $menuActive == 'pesanan' ? 'active' : ''?>" href="<?=base_url('/orders')?>">Pesanan Anda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>