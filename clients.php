<div class="portfolio-container section-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 portfolio section-description wow fadeIn">
                <h2>Our portfolio</h2>
                <div class="divider-1 wow fadeInUp"><span></span></div>
                <p>We've completed 537 projects since we started back in 2010. Check them out!</p>
            </div>
        </div>
        <div class="row">

            <?php
                include 'db/koneksi.php';

                $sql = "SELECT * FROM clients";

                $hasil = $koneksi->query($sql);

                $jumlah_data = $hasil->num_rows;

                if($jumlah_data > 0) {
                    while ($data = $hasil->fetch_object()) {

            ?>
                <div class="col-sm-4 portfolio-box wow fadeInUp">
                    <div class="portfolio-box-image">
                        <img src="<?php echo 'assets/img/clients/'.$data->gambar ?>"><br>
                        <audio controls src="<?php echo 'assets/img/clients/'.$data->audio ?>"></audio>
                        <video  width="200" height="200" controls>
                            <source src="<?php echo 'assets/img/clients/'.$data->video ?>" type="video/mp4" />
                        </video>
                    </div>

                    <h3><a href="#"><?php echo $data->nama ?></a> <i class="fa fa-angle-right"></i></h3>
                    <div class="portfolio-box-date"><i class="fa fa-calendar-o"></i><?php echo $data->waktu ?></div>
                    <p><?php echo $data->deskripsi ?></p>
            <?php
                    }
                }
            ?>

        </div>

    </div>
</div>
