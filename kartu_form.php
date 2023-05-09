<br>
<?php
$obj_kartu = new Kartu();
$data_kartu = $obj_kartu->Kartu();

?>
<form action="kartu_controller.php" method="POST">
    <h1 style="text-align:center">FORM INPUT KARTU</h1>
<br>
    <div class="form-group row">
    <div class="form-group row">
        <label for="text1" class="col-4 col-form-label">Kode</label> 
        <div class="col-8">
            <input id="kode" name="kode" type="text" class="form-control" placeholder="Masukan kode kartu">
        </div>
    </div>
    <div class="form-group row">
        <label for="text" class="col-4 col-form-label">Nama Kartu</label> 
        <div class="col-8">
            <input id="nama" name="nama" type="text" class="form-control" placeholder="Masukan nama kartu">
        </div>
    </div>
    <div class="form-group row">
            <label for="text6" class="col-4 col-form-label">Diskon</label> 
            <div class="col-8">
                <input id="diskon" name="diskon" type="number" class="form-control" placeholder="Masukan diskon yang didapatkan">
            </div>
        </div> 
        <div class="form-group row">
            <label for="text6" class="col-4 col-form-label">Iuran</label> 
            <div class="col-8">
                <input id="iuran" name="iuran" type="number" class="form-control" placeholder="Masukan Iuran yang harus dibayar pelanggan">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="proses" type="submit" value="simpan" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
                <button href="index.php?url=kartu" class="btn btn-danger">Cancel</button>
            </div>
        </div>
</form>