<?php
$id = $_REQUEST['id'];
$model = new Pesanan();
$pesanan = $model->getPesanan($id);

?>

<div>
    <h3><?= $pesanan['id'] ?> </h3>
</div>