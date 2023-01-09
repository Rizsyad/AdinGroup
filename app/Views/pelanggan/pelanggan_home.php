  <div class="container">
      <div class="text-center">
        <h1 class="text-bold mt-4">Adin Coffe</h1>
        <p>Buka Jam <b>16:00 - 22:00</b></p>
      </div>
      <?php if($time->hour >= 16 && $time->hour <= 22): ?>
        <div class="row mb-5 mt-5">
          <div class="col-md-6 d-flex justify-content-end">
              <a href="<?=base_url('/daftar-menu')?>" class="btn btn-primary">Lihat daftar Menu</a>
          </div>
          <div class="col-md-6 d-flex justify-content-start">
              <a href="<?=base_url('/orders')?>" class="btn btn-primary">Lihat Pesanan</a>
          </div>
        </div>
      <?php else: ?>
        <div class="text-center">
          toko sedang tutup
        </div>
      <?php endif; ?>
        


  </div>