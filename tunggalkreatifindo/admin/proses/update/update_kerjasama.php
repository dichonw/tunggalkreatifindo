<?php
include "koneksi/koneksi.php";

ini_set("display_errors", 0);
if(isset($_POST['kirim'])){
    $id_partner = $_POST ['id_partner'];
    $nm_partner = $_POST ['kerjasama'];
    $gambar         = $_POST['gambar'];
    $tipe_gambar    = array('image/jpeg', 'image/bmp', 'image/png', 'image/jpg');
    $nama           = $_FILES['gambar']['name'];
    $ukuran         = $_FILES['gambar']['size'];
    $tipe           = $_FILES['gambar']['type'];
    $error          = $_FILES['gambar']['erorr'];


    var_dump($_POST['gambar']);
?>
    <?php
    if ($nama == '') {
        mysqli_query($koneksi, "UPDATE tabel_partner set nm_partner = '$nm_partner', gmb_partner = '' where id_partner = '$id_partner'");
        var_dump($_POST['kirim']);
   ?><script language="JavaScript">
            document.location = '?menu=kerjasama'
        </script>
        <?php
    } else if ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/banner/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/banner/' . $nama);
                mysqli_query($koneksi, "UPDATE tabel_partner set nm_partner = '$nm_partner', gmb_partner = '$nama' where id_partner = '$id_partner'");
    $hasil=mysqli_query($koneksi,$query);
        ?><script language="JavaScript">
                    document.location = '?menu=kerjasama'
                </script>
    <?php
                } else {
                    echo "<script>alert('Maaf jangan memasukkan gambar selain JPG ,JPEG, BMP, dan PNG Max.Size 1Mb');window.history.go(-1);</script>";
                }
            } else {
                echo "<script>alert('Gambar Tidak Boleh Kosong ');window.history.go(-1);";
            }
        }
}
?>