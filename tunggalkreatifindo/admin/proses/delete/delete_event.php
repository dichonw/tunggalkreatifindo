<?php
include 'koneksi/koneksi.php';

$id = $_GET['id_event'];

mysqli_query($koneksi,"delete from tabel_event where id_event='$id'");

echo "<script type='text/javascript'>
			window.location.replace('?menu=event')
	</script>";
?>