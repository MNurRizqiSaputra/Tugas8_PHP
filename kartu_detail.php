<?php
$id = $_REQUEST['id'];
$model = new Kartu();
$kartu = $model->getKartu($id);

?>

<div>
    <h3><?= $kartu['id'] ?> </h3>
</div>