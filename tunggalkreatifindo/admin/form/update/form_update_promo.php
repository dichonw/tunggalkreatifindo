<p>Ubah Daftar Promo</p>
<?php
  include 'koneksi/koneksi.php';
  $id_slide = $_GET['id_slide'];
  $data = mysqli_query($koneksi,"select * from tabel_slide where id_slide='$id_slide'");
  while($d = mysqli_fetch_array($data)){
?>

<form method="POST" action="?menu=proses_ubah_promo" enctype="multipart/form-data">
<div class="form-group">
	<input type="hidden" name="id_slide" value="<?php echo $d['id_slide']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/><img src="images/banner/<?php echo $d['gbr_slide']; ?>" width="100"/>
        </div>
      </div>
    </div>
<?php
    }
?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=promo" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
