<?php
include('koneksi/koneksi.php');
ini_set("display_errors", 0);
if (isset($_POST['kirim'])) {
    $id_jasa = $_POST ['id_jasa'];
    $nm_jasa = $_POST ['jasa'];
    $tarif_jasa = $_POST ['tarif'];
    $kt_jasa = $_POST ['deskripsi'];
    $gambar         = $_POST['gambar'];
    $tipe_gambar    = array('image/jpeg', 'image/bmp', 'image/png', 'image/jpg');
    $nama           = $_FILES['gambar']['name'];
    $ukuran         = $_FILES['gambar']['size'];
    $tipe           = $_FILES['gambar']['type'];
    $error          = $_FILES['gambar']['erorr'];
?>
    <?php
    if ($nama == '') {
        mysqli_query($koneksi, "UPDATE tabel_jasa SET nm_jasa = '$nm_jasa', kt_jasa = '$kt_jasa', tarif_jasa = '$tarif_jasa' WHERE id_jasa ='$id_jasa'");
        echo $nama;
    ?><script language="JavaScript">
            document.location = '?menu=jasa'
        </script>
        <?php
    } elseif ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $nama);
                mysqli_query($koneksi, "UPDATE tabel_jasa SET nm_jasa = '$nm_jasa', kt_jasa = '$kt_jasa', tarif_jasa = '$tarif_jasa', gmb_jasa = '$nama' WHERE id_jasa ='$id_jasa'");
        ?><script language="JavaScript">
                    document.location = '?menu=jasa'
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

