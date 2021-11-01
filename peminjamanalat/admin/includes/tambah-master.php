<div class="container mt-5">
 
  <h2>Tambah Data Alat</h2>
  <hr>

  <a href="data-master.php" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>

  <form action="proses/proses-tambah-master.php" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="kd_jenis">Kode Jenis Alat</label>
      <input type="text" name="kd_jenis" placeholder="LPP001" class="form-control" autofocus required>
    </div>

    <div class="row">
      <div class="col-md-4">
 <div class="form-group">
   <label for="kategori_barang">Kategori Alat</label>
      <input type="text" name="kategori_barang" placeholder="Laptop" class="form-control" autofocus required>
 </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
   <label for="nama_barang">Type Alat</label>
   <input type="text" name="nama_barang" class="form-control" required placeholder="Contoh: Lenovo Ideapead 310">
 </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
           <label for="spesifikasi">Spesifikasi</label>
           <textarea name="spesifikasi" id="spesifikasi" cols="45"></textarea>
 </div>
      </div>
      <div class="col-md-4">
 <button type="submit" name="simpan" class="btn btn-success btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
      </div>
    </div>
  </form>
</div>
