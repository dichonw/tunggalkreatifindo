<?php
include 'koneksi/koneksi.php';

$id = $_GET['id_jasa'];

mysqli_query($koneksi,"delete from tabel_jasa where id_jasa='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=jasa')
	</script>";
?>