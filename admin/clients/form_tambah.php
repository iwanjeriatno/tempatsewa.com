<div class="container">

    <div class="col-sm-12 footer-left">
        <h3>Contact us</h3>
        <div class="contact">
            <form action="clients/tambah.php" method="post" enctype="multipart/form-data">
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
</div>
