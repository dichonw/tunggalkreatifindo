<?php
include 'koneksi/koneksi.php';
$id_event = $_GET['id_event'];
$data = mysqli_query($koneksi,"SELECT * FROM tabel_event where id_event = '$id_event';");
while($d = mysqli_fetch_array($data)){
?>
<p>Ubah Daftar Event</p>


<form method="POST" action="?menu=proses_ubah_event" style="margin-bottom: 50px;" enctype="multipart/form-data">
      <div class="form-group">
        <input type="hidden" name="id_event" value="<?php echo $d['id_event']; ?>">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Event</div>
          </div>
          <input type="text" name="event" class="form-control" value="<?php echo $d['nm_event'];?>" placeholder="Nama Event" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/><img src="images/<?php echo $d['gmb_event']; ?>" width="100"/>
        </div>
      </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Tanggal</div>
            </div>
            <input type="date" id="date" name="tgl" class="form-control" value="<?php echo $d['tgl_event'];?>" placeholder="Tanggal Event" required="required">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Deskripsi</div>
            </div>
            <textarea class="form-control" id="deskripsi event" name="deskripsi" rows="3" placeholder="Deskripsi Event" value="<?php echo $d['kt_event'];?>"><?php echo $d['kt_event'];?></textarea>
        </div>
    </div>
<?php
    }
?>
<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=event" class="btn btn-danger ">
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
