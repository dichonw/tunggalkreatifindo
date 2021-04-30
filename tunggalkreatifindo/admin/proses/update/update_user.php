<?php 
include 'koneksi/koneksi.php';

$id_user = $_POST['id_user'];
$nm = $_POST['nama'];
$email = $_POST['email'];
$pass = md5("Padasd0890".md5($_POST ['password']));
$level = $_POST['level'];
$status = $_POST['status'];

mysqli_query($koneksi,"UPDATE tabel_user SET nm_user = '$nm', email = '$email', password = '$pass',  level = '$level', status = '$status' WHERE id_user = '$id_user'");
 
echo "<script type='text/javascript'>
			window.location.replace('?menu=list_user')
	</script>";
 
?>