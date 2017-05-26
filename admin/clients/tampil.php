<!-- Footer -->
<div class="" style="margin-top:100px">
    <div class="container">

        <div class="col-sm-12 footer-right">
            <h3 class="pull-left">Data Clients</h3>
            <a href="index.php?menu=tambah-clients" type="button" class="btn-warning btn-lg pull-right" name="button">Tambah Data</a><br><br>
            <table border="1" width="100%">
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Gambar</td>
                    <td>Audio</td>
                    <td>Video</td>
                    <td width=200px>Deskripsi</td>
                    <td>Aksi</td>
                </tr>

                <?php
                    include '../db/koneksi.php';

                    $sql = "SELECT * FROM clients";

                    $hasil = $koneksi->query($sql);

                    $jumlah_data = $hasil->num_rows;

                    if($jumlah_data > 0) {
                        while ($data = $hasil->fetch_object()) {

                ?>

                        <tr>
                            <td><?php echo $data->id ?></td>
                            <td><?php echo $data->nama ?></td>
                            <td width=200px>
                                <img width="200" src="<?php echo '../assets/img/clients/'.$data->gambar ?>">
                            </td>
                            <td width=100px>
                                <audio controls src="<?php echo '../assets/img/clients/'.$data->audio ?>"></audio>
                            </td>
                            <td width=200px>
                                <video  width="200" height="200" controls>
                                    <source src="<?php echo '../assets/img/clients/'.$data->video ?>" type="video/mp4" />
                                </video>
                            <td width=200px><?php echo $data->deskripsi ?></td>
                            <td>
                                <p>
                                    <a href="index.php?menu=ubah-clients&form_ubah.php&id=<?php echo $data->id; ?>">Ubah</a><br>
                                    <a href="index.php?menu=hapus-clients&hapus.php&id=<?php echo $data->id; ?>">Hapus</a>
                                    <!-- Proses Edit Delete nya bisa di cek ki disini :
                                    <a href="https://github.com/iwanjeriatno/Crud-MYSQLi-OOP-PHP" target="_blank">
                                        https://github.com/iwanjeriatno/Crud-MYSQLi-OOP-PHP
                                    </a> -->
                                </p>

                            </td>
                        </tr>

                <?php
                        }
                    }
                ?>
            </table>
            <div class="" style="margin-bottom:200px">

            </div>
        </div>

    </div>

</div>
