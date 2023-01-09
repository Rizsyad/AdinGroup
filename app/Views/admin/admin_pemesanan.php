<form method="post" action="">
  <div class="container">
    <div class="text-center">
      <h1 class="text-bold mt-4">Pesanan Anda</h1>
    </div>

    <div class="form-group mb-3">
      <label for="">No Meja</label>
      <select name="meja" id="" class="form-control">
        <option value="">Pilih No Meja</option>
        <option value="">1</option>
      </select>
    </div>

    <table class="table table-hover">
      <thead>
        <tr>
          <th>Action</th>
          <th>Nama Menu</th>
          <th>Jumlah</th>
          <th>Harga</th>
        </tr>
      </thead>
      <tbody>
        <tr data-id="1">
          <td>
            <button class="btn btn-danger delete" data-id="1" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <input type="hidden" name="pesanan[id_menu]" value="1" />
          </td>
          <td>Adin Bestie</td>
          <td>
            <input type="number" name="pesanan[item]" value="1" class="form-control item" min="1" max="99" />
          </td>
          <td class="price d-none">25000</td>
          <td class="harga">25000</td>
        </tr>
        <tr data-id="2">
          <td>
            <button class="btn btn-danger delete" data-id="2" type="button"><i class="fa fa-trash" aria-hidden="true"></i></button>
            <input type="hidden" name="pesanan[id_menu]" value="2" />
          </td>
          <td>Adin Besti 2</td>
          <td>
            <input type="number" name="pesanan[item]" value="1" class="form-control item" min="1" max="99" />
          </td>
          <td class="price d-none">50000</td>
          <td class="harga">50000</td>
        </tr>

      </tbody>
      <tfoot>
        <tr>
          <th colspan="2">Total Belanja</th>
          <th id="jumlah">0</th>
          <th id="totalHarga">Rp. 25,000</th>
        </tr>
      </tfoot>
    </table>

    <a href="<?=base_url('daftar-menu')?>" class="btn btn-primary">Lihat Menu</a>
    <button class="btn btn-success" type="submit">Konfirmasi Pesanan</button>

  </div>

</form>