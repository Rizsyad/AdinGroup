
    <?php 
        $isTokoBuka = ($time->hour >= 16 && $time->hour <= 22); 
    ?>
    <div class="container-fluid mt-5">

        <div class="row mt-5">
            <div class="col-md-5 mx-auto">
                <div class="input-group">
                    <input class="form-control border" type="search" placeholder="Cari menu apa?"
                        id="example-search-input">
                </div>
            </div>
        </div>

        <h3 class="mt-3">Makanan</h3>

        <div class="row">
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="font-bold">Rp. 25.000</p>
                        <div class="d-grid">
                            <button class="btn btn-custome-success"  <?= !$isTokoBuka ? "disabled" : "" ?> >Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-grid">
                            <button class="btn btn-custome-success" data-id="1">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-grid">
                            <button class="btn btn-custome-success" data-id="2">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="font-bold text-danger">Persediaan Habis</p>
                        <div class="d-grid">
                            <button class="btn btn-custome-success" disabled>Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-grid">
                            <button class="btn btn-custome-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-grid">
                            <button class="btn btn-custome-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-grid">
                            <button class="btn btn-custome-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="<?=base_url('product/product01.jpeg')?>" class="card-img-top" width="200px"
                        height="200px">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <div class="d-grid">
                            <button class="btn btn-custome-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>