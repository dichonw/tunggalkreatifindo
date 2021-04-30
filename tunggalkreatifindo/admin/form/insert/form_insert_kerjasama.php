<p>Tambah Daftar Kerjasama</p>

<form method="POST" action="?menu=proses_tambah_kerjasama" enctype="multipart/form-data">
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
            <div class="input-group-text"><abbr title="wajib diisi"></abbr>Nama</div>
          </div>
          <input type="text" name="kerjasama" class="form-control" value="" placeholder="Nama Kerjasama" required="required"  />
        </div>
      </div>

<input type="submit" class="btn btn-primary" name="kirim" value="Simpan">
<a href="?menu=kerjasama" class="btn btn-danger ">
  <span class="icon text-white-50">
  </span>
  <span class="text">Kembali</span>
</a>
</form>
