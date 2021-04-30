<?php
include('koneksi/koneksi.php');
ini_set("display_errors", 0);
if (isset($_POST['kirim'])) {
    $id_event = $_POST ['id_event'];
    $nm_event = $_POST ['event'];
    $tgl_event = $_POST ['tgl'];
    $kt_event = $_POST ['deskripsi'];
    $gambar         = $_POST['gambar'];
    $tipe_gambar    = array('image/jpeg', 'image/bmp', 'image/png', 'image/jpg');
    $nama           = $_FILES['gambar']['name'];
    $ukuran         = $_FILES['gambar']['size'];
    $tipe           = $_FILES['gambar']['type'];
    $error          = $_FILES['gambar']['erorr'];
?>
    <?php
    if ($nama == '') {
        mysqli_query($koneksi, "UPDATE tabel_event SET nm_event = '$nm_event', kt_event = '$kt_event', tgl_event = '$tgl_event' WHERE id_event ='$id_event'");
        echo $nama;
    ?><script language="JavaScript">
            document.location = '?menu=event'
        </script>
        <?php
    } elseif ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $nama);
                mysqli_query($koneksi, "UPDATE tabel_event SET nm_event = '$nm_event', kt_event = '$kt_event', tgl_event = '$tgl_event', gmb_event = '$nama' WHERE id_event ='$id_event'");
        ?><script language="JavaScript">
                    document.location = '?menu=event'
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

