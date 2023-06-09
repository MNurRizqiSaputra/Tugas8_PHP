<?php
session_start();
//memanggil dan memproses file bagian atas
include_once 'koneksi.php';
include_once 'models/Produk.php';
include_once 'models/Jenis_Produk.php';
include_once 'models/Pelanggan.php';
include_once 'models/Pesanan.php';
include_once 'models/Kartu.php';
include_once 'top.php';
//memanggil dan memproses file bagian menu
include_once 'menu.php';
?>
 <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        <?php 
                        // Menonaktifkan warning
                        error_reporting(E_ERROR); // atau error_reporting(E_ALL & ~E_WARNING);

                        // Menonaktifkan tampilan warning pada browser
                        ini_set('display_errors', 'Off');

                        //algoritma menangkap url agar masuk kedalam index
                        $url = $_GET['url'];
                        if($url == 'dashboard'){
                            include_once 'dashboard.php';
                        } else if (!empty($url)){
                            include_once ''.$url.'.php';
                        } else { 'dashboard.php';
                       
                        }
                        
                        ?>
                    </div>
                </main>
</div>

<?php
//memanggil file bagian bawah
include_once 'bottom.php';
?>
