<?php
include "koneksi/koneksi.php";

$queryUrut = mysqli_query($koneksi, "SELECT max(id_jasa) as kodeTerbesar FROM tabel_jasa");
$data = mysqli_fetch_array($queryUrut);
$kodeJasa = $data['kodeTerbesar'];
$urutan = (int) substr($kodeJasa, 3, 3);
$urutan++;
$huruf = "J";
$kodeJas = $huruf . sprintf("%03s", $urutan);

ini_set("display_errors", 0);
if(isset($_POST['kirim'])){
    $nm_jasa = $_POST ['jasa'];
    $tarif_jasa = $_POST ['tarif'];
    $kt_jasa = $_POST ['deskripsi'];
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
        mysqli_query($koneksi, "INSERT INTO tabel_jasa values 
        ('$kodeJas','$nm_jasa','$kt_jasa','$tarif_jasa','')");
        var_dump($_POST['kirim']);
   ?><script language="JavaScript">
            document.location = '?menu=jasa'
        </script>
        <?php
    } else if ($nama != '') {
        if ($nama !== "" && $ukuran > 0 && $error == 0) {
            if (in_array(strtolower($tipe), $tipe_gambar)) {
                unlink("images/$nama");
                move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/' . $nama);
                mysqli_query($koneksi, "INSERT INTO tabel_jasa values ('$kodeJas','$nm_jasa','$kt_jasa','$tarif_jasa','$nama')");
	$hasil=mysqli_query($koneksi,$query);
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

	// $query = "INSERT INTO tabel_barang values
	// ('$kodeBar','$nm_barang','','$id_satuan','$id_kategori','$deskripsi', '$harga','$diskon','$harga_diskon')";
	// $hasil=mysqli_query($koneksi,$query);
 //    echo "<script type='text/javascript'>
 //    window.location.replace('?menu=barang')
 //    </script>";
}
?>