<p>Ubah Daftar Promo</p>
<?php
  include 'koneksi/koneksi.php';
  $id_partner = $_GET['id_partner'];
  $data = mysqli_query($koneksi,"select * from tabel_partner where id_partner='$id_partner'");
  while($d = mysqli_fetch_array($data)){
?>

<form method="POST" action="?menu=proses_ubah_kerjasama" enctype="multipart/form-data">
<div class="form-group">
	<input type="hidden" name="id_partner" value="<?php echo $d['id_partner']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/><img src="images/banner/<?php echo $d['gmb_partner']; ?>" width="100"/>
        </div>
      </div>
    </div>
    <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Nama</div>
          </div>
          <input type="text" name="kerjasama" class="form-control" value="<?php echo $d['nm_partner']; ?>" placeholder="Nama Kerjasama" required="required"  />
        </div>
      </div>
<?php
    }
?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=kerjasama" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
