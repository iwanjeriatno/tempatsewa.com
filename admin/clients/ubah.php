<?php
    include '../../db/koneksi.php';

    if(isset($_POST['simpan'])) {
        $id         = $_GET['id'];
        $nama       = $_POST['nama'];
        $waktu      = $_POST['waktu'];
        $gambar     = $_FILES['gambar']['name'];
        $audio      = $_FILES['audio']['name'];
        $video      = $_FILES['video']['name'];
        $deskripsi  = $_POST['deskripsi'];

        $lokasi_gambar = '../../assets/img/clients/'.$gambar;
        $lokasi_audio  = '../../assets/img/clients/'.$audio;
        $lokasi_video  = '../../assets/img/clients/'.$video;

        if(move_uploaded_file($_FILES['gambar']['tmp_name'], $lokasi_gambar)){
            if(move_uploaded_file($_FILES['audio']['tmp_name'], $lokasi_audio)){
                if(move_uploaded_file($_FILES['video']['tmp_name'], $lokasi_video)){
                    $sql = "UPDATE clients SET nama='$nama', waktu='$waktu', gambar='$gambar', audio='$audio', video='$video', deskripsi='$deskripsi'
                            WHERE id='$id' ";

                    $hasil = $koneksi->query($sql);
                    if($hasil == TRUE) {
                        header('Location: /tempatsewa.com/admin/index.php?menu=clients');
                    } else {
                        echo 'gagal';
                    }
                } else {
                    echo 'gagal video';
                }
            } else {
                echo 'gagal audio';
            }
        } else {
            echo 'gagal gambar';
        }
    }

?>
