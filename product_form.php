<br>
<?php
$obj_produk = new Produk();
$data_produk = $obj_produk->dataProduk();

?>
<form action="produk_controller.php" method="POST">
<h1 style="text-align:center">FORM INPUT PRODUK</h1>
<br>
      <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
          <input id="kode" name="kode" type="text" class="form-control" placeholder="Masukan kode produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama Produk</label> 
        <div class="col-8">
          <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukan nama produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text3" class="col-4 col-form-label">Harga Beli</label> 
        <div class="col-8">
          <input id="harga_beli" name="harga_beli" type="number" min="0" class="form-control" placeholder="Masukan harga beli produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text2" class="col-4 col-form-label">Harga Jual</label> 
        <div class="col-8">
          <input id="harga_jual" name="harga_jual" type="number" min="0" class="form-control" placeholder="Masukan harga jual produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text4" class="col-4 col-form-label">Stok</label> 
        <div class="col-8">
          <input id="stok" name="stok" type="number" min="0" class="form-control" placeholder="Masukan stok produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text5" class="col-4 col-form-label">Minimal Stok</label> 
        <div class="col-8">
          <input id="min_stok" name="min_stok" type="number" min="0" class="form-control" placeholder="Masukan minimal stok produk">
        </div>
      </div>
      <div class="form-group row">
        <label for="text6" class="col-4 col-form-label">Jenis Produk ID</label> 
        <div class="col-8">
          <input id="jenis_produk_id" name="jenis_produk_id" min="1" max="4" type="number" class="form-control" placeholder="Masukan jenis produk">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-warning">Reset</button>
          <button href="index.php?url=product" class="btn btn-danger">Cancel</button>
        </div>
      </div>
</form>
<br>