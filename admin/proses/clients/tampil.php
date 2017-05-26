<?php


        $koneksi = new mysqli('localhost','root','','tempatsewa.com');

        $sql = "SELECT * FROM clients";

        $hasil = $koneksi->query($sql);

        $jumlah_data = $hasil->num_rows;

        if($jumlah_data > 0) {
            while ($data = $hasil->fetch_object()) {


?>
