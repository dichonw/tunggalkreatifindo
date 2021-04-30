<?php
include 'koneksi/koneksi.php';
?>
<p>Tambah Daftar Event</p>

<form method="POST" action="?menu=proses_tambah_event" style="margin-bottom: 50px;" enctype="multipart/form-data">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Event</div>
          </div>
          <input type="text" name="event" class="form-control" value="" placeholder="Nama Event" required="required"  />
        </div>
      </div>
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <input type="file" name="gambar"/>
        </div>
      </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Tanggal</div>
            </div>
            <input type="date" id="date" name="tgl" class="form-control" value="" placeholder="Tanggal Event" required="required">
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Deskripsi</div>
            </div>
            <textarea class="form-control" id="deskripsi event" name="deskripsi" rows="3" placeholder="Deskripsi Event"></textarea>
        </div>
    </div>

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

