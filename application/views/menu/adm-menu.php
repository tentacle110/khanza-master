<div class="container border p-4">
  <form class="" action="index.html" method="post">
  <div class="row">
    <div class="col-lg-12">
      <h2>Masukan Katgori</h2>
    </div>
    <div class="col-lg-1">
      <input type="text" class="form-control" name="Kat_kode" value="" placeholder="kode">
    </div>
    <div class="col-lg-11">
      <input type="text" class="form-control" name="kat_nama" value="" placeholder="nama kategori">
    </div>
  </div>

  <div class="row mt-4">
    <div class="col-lg-11">
      <h4>Masukan menu</h4>
    </div>
    <div class="col-lg-1">
      <button type="button" class="btn btn-outline-success" name="button">+</button>
    </div>
    <div class="col-lg-12" id="daftar-menu">
      <div class="row border p-2">
        <div class="col-lg-2">
          <img src="" class="form-control" alt="">
        </div>
        <div class="col-lg-10">
          <div class="row">
            <div class="col-lg-12">
              <input type="text" name="menu_nama[]" class="form-control" value="" placeholder="nama menu">
            </div>
            <div class="col-lg-12">
              <input type="text" name="menu_alamat[]" class="form-control" value="" placeholder="alamat link">
            </div>
            <div class="col-lg-12">
              <input type="file" name="menu_icon[]" class="form-control" value="">
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="row m-4">
    <div class="col-lg-12 d-flex justify-content-center">
      <button type="submit" class="btn btn-success" name="button">Tambah</button>
    </div>

  </div>

    </form>
</div>
