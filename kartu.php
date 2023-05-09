<?php
// include_once 'top.php';

// include_once 'menu.php';
$model = new Kartu();
$kartu = $model->Kartu();

// foreach ($data_produk as $row){
//     print $row['kode'];
// }

?>
                        <h1 class="mt-4">TABLE KARTU</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php?url=dashboard">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                Tabel disini berisi data jenis kartu yang ada di toko
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Kartu
                            </div>
                            <div class="card-body">
                            <div class="card-header">
                                    <!-- membuat tombol mengarahkan ke file produk_form.php -->
                                    <a href="index.php?url=kartu_form" class="btn btn-primary btn-sm"> Tambah</a>
                                </div>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama </th>
                                            <th>Diskon</th>
                                            <th>Iuran</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- hapus dari baris 64 sampai 511 -->
                                        <!-- dari <tr> ke </tr> -->
                                        <?php
                                            $no = 1;
                                            foreach($kartu as $row){
                                                
                                                ?>
                                            <tr>
                                                <td><?= $no ?></td>
                                                <td><?= $row['kode']?></td>
                                                <td><?= $row['nama']?></td>
                                                <td><?= $row['diskon']?></td>
                                                <td><?= $row['iuran']?></td>
                                                <td>
                                                    <form action="kartu_controller.php" method="POST">
                                                        <a class="btn btn-info btn-sm" href="index.php?url=kartu_detail&id=<?= $row ['id'] ?>">Detail</a>
                                                        <a class="btn btn-warning btn-sm">Ubah</a>
                                                        <a class="btn btn-danger btn-sm">Hapus</a>
                                                        
                                                        <input type="hidden" name="idx" value="<?= $row['id']?>">
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php
                                            $no++; 
                                        } 
                                        ?>
                                    </tbody>
                                    <!-- <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Keterangan</th>   
                                        </tr>
                                    </tfoot> -->
                                </table>
                            </div>

</div>
</div>

                <?php
                    include_once 'bottom.php';
                ?>