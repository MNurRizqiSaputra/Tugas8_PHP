<?php
$id = $_REQUEST['id'];
$model = new Produk();
$produk = $model->getProduk($id);

?>

<h1 class="mt-4">Detail produk</h1>
<div class="card-body">
    <div class="card mb-4">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Beli</th>
                                            <th>Harga Jual</th>
                                            <th>Stok</th>
                                            <th>Minimal Stok</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><?= $produk['kode']?></td>
                                            <td><?= $produk['nama']?></td>
                                            <td><?= $produk['harga_beli']?></td>
                                            <td><?= $produk['harga_jual']?></td>
                                            <td><?= $produk['stok']?></td>
                                            <td><?= $produk['min_stok']?></td>
                                        </tr>
                                    </tbody>
                                    </table>
                                    <a class="btn btn-primary" href="index.php?url=product" role="button">Back</a>
</div>
</div>