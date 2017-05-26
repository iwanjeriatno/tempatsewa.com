<?php
    include '../db/koneksi.php';

    $id = $_GET['id'];

    $sql = "DELETE FROM clients WHERE id='$id' ";
    $hasil = $koneksi->query($sql);

    if($hasil == TRUE) {
        header('Location: /tempatsewa.com/admin/index.php?menu=clients');
    } else {
        echo 'gagal';
    }
 ?>
