<?php
include 'koneksi/koneksi.php';

$id = $_GET['id_partner'];

mysqli_query($koneksi,"delete from tabel_partner where id_partner='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=kerjasama')
	</script>";
?>