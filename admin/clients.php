<!-- Footer -->
<div class="">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 footer-left">
                <h3>Contact us</h3>
                <div class="contact">
                    <form action="proses/clients/simpan.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label class="pull-left" for="contact-email">Nama</label>
                            <input type="text" name="nama" placeholder="Nama..." class="contact-email form-control" id="contact-email">
                        </div>
                        <div class="form-group">
                            <label class="pull-left" for="contact-subject">Waktu</label>
                            <input type="date" name="waktu" placeholder="Waktu..." class="contact-subject form-control" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label class="pull-left" for="contact-subject">Gambar</label>
                            <input type="file" name="gambar" class="contact-subject form-control" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label class="pull-left" for="contact-subject">Audio</label>
                            <input type="file" name="audio" class="contact-subject form-control" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label class="pull-left" for="contact-subject">Video</label>
                            <input type="file" name="video" class="contact-subject form-control" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label class="pull-left" for="contact-message">Deskripsi</label>
                            <textarea name="deskripsi" placeholder="Deskripsi..." class="contact-message form-control" id="contact-message"></textarea>
                        </div>
                        <button type="submit" class="btn" name="simpan">Simpan</button>
                    </form>
                </div>
            </div>
        </div><br><br><br>
        <div class="col-sm-12 col-sm-offset-1 footer-right">
            <h3>Data Clients</h3>

            <table border="1" width="700px">
                <tr>
                    <td>ID</td>
                    <td>Nama</td>
                    <td>Waktu</td>
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
                            <td><?php echo $data->waktu ?></td>
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
                                    Proses Edit Delete nya bisa di cek ki disini :
                                    <a href="https://github.com/iwanjeriatno/Crud-MYSQLi-OOP-PHP" target="_blank">
                                        https://github.com/iwanjeriatno/Crud-MYSQLi-OOP-PHP
                                    </a>
                                </p>

                            </td>
                        </tr>

                <?php
                        }
                    }
                ?>
            </table>

        </div>

    </div>

</div>
