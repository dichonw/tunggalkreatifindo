<?php
include 'koneksi/koneksi.php';
$id_jasa = $_GET['id_jasa'];
$data = mysqli_query($koneksi,"SELECT * FROM tabel_jasa where id_jasa = '$id_jasa';");
while($d = mysqli_fetch_array($data)){
?>
<p>Ubah Daftar Jasa</p>


<form method="POST" action="?menu=proses_ubah_jasa" style="margin-bottom: 50px;" enctype="multipart/form-data">
      <div class="form-group">
        <input type="hidden" name="id_jasa" value="<?php echo $d['id_jasa']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Jasa</div>
          </div>
          <input type="text" name="jasa" class="form-control" value="<?php echo $d['nm_jasa'];?>" placeholder="Nama Jasa" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/><img src="images/<?php echo $d['gmb_jasa']; ?>" width="100"/>
        </div>
      </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Tarif</div>
            </div>
            <input type="number" name="tarif" class="form-control" value="<?php echo $d['tarif_jasa'];?>" placeholder="Tarif Jasa" required="required"  />
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Deskripsi</div>
            </div>
            <textarea class="form-control" id="deskripsi jasa" name="deskripsi" rows="3" placeholder="Deskripsi Jasa" value="<?php echo $d['kt_jasa'];?>"><?php echo $d['kt_jasa'];?></textarea>
        </div>
    </div>
<?php
    }
?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=jasa" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>

<script>
  // Add the following code if you want the name of the file appear on select
  $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
  });
</script>
