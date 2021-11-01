<div class="container mt-5">
 
  <h2>Ubah Data Alat</h2>
  <hr>

  <a href="data-barang.php" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>

  <?php
  $barang = $conn->query("SELECT * FROM barang WHERE id_barang = '" .$_GET['id']. "'");
  $data = $barang->fetch_assoc();
  ?>

  <form action="proses/proses-ubah-barang.php" method="POST" class="mt-3" autocomplete="off">
    <input type="hidden" name="id" value="<?= $data['id_barang'] ?>">
    <div class="form-group">
      <div class="form-group">
          <label for="nama_barang">Type Alat</label>
      <input type="text" name="nama_barang" placeholder="Contoh: Kursi" class="form-control" autofocus required value="<?= $data['nama_barang'] ?>" required readonly>
 </div>
 <div class="row">
      <div class="col-md-4">
        <div class="form-group">
          <label for="kd_jenis">Kode Alat</label>
          <input type="text" name="kd_jenis" class="form-control" required placeholder="Contoh: RAM 4 GB,dst" value="<?= $data['kd_jenis'] ?>" required readonly>
 </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
   <label for="kategori_barang">Kategori Alat</label>
   <input type="text" name="kategori_barang" class="form-control" required value="<?= $data['kategori_barang'] ?>" Required readonly>
 </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
          <label for="spesifikasi">Spesifikasi</label>
          <input type="text" name="spesifikasi" class="form-control" required placeholder="Contoh: RAM 4 GB,dst" value="<?= $data['spesifikasi'] ?>">
 </div>
      </div>
      <div class="col-md-4">
        <div class="form-group">
   <label for="jumlah">Jumlah</label>
   <input type="number" name="jumlah" min="1" placeholder="1" class="form-control" required value="<?= $data['jumlah'] ?>">
 </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
   <label for="asal_barang">Asal Alat</label>
   <input type="text" name="asal_barang" class="form-control" value="<?= $data['asal_barang'] ?>">
 </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
   <label for="lokasi">Lokasi Ruang Alat</label>
   <input type="text" name="lokasi" class="form-control" value="<?= $data['lokasi'] ?>">
 </div>
      </div>
    <div class="col-md-4">
 <div class="form-group">
   <label for="tempat">Tempat Penyimpanan Alat</label>
   <input type="text" name="tempat" class="form-control" value="<?= $data['tempat'] ?>">
 </div>
      </div>
      <div class="col-md-4">
 <button type="submit" name="simpan" class="btn btn-success btn-sm" style="margin-top:32px; width:100%;"><b>Ubah</b></button>
      </div>
    </div>
  </form>
</div>