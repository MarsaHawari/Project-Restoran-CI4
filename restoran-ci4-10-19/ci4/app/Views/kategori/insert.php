<?= $this->extend('template/admin') ?>

<?= $this->section('content') ?>

<h1>INSERT DATA</h1>

<?php 

    echo session()->getFlashdata('info');

?>


<form action=" <?= base_url()?>/admin/kategori/insert " method="post">
    kategori : <input type="text" name="kategori" required>
    <br>
    keterangan : <input type="text" name="keterangan" required>
    <br>
    <input type="submit" name="simpan" value="SIMPAN">


</form>


<?= $this->endSection() ?>