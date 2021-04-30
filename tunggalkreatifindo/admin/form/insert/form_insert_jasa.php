<?php
include 'koneksi/koneksi.php';
?>
<p>Tambah Daftar Jasa</p>


<form method="POST" action="?menu=proses_tambah_jasa" style="margin-bottom: 50px;" enctype="multipart/form-data">
      <div class="form-group">
        <div class="input-group">
          <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Jasa</div>
          </div>
          <input type="text" name="jasa" class="form-control" value="" placeholder="Nama Jasa" required="required"  />
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
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Tarif</div>
            </div>
            <input type="number" name="tarif" class="form-control" value="" placeholder="Tarif Jasa" required="required"/>
        </div>
    </div>
    <div class="form-group">
        <div class="input-group">
            <div class="input-group-prepend">
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Deskripsi</div>
            </div>
            <textarea class="form-control" id="deskripsi jasa" name="deskripsi" rows="3" placeholder="Deskripsi Jasa"></textarea>
        </div>
    </div>

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
