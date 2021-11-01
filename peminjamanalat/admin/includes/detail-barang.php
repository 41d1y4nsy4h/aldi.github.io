<div class="container mt-5">
 
  <h2>Detail Data Barang</h2>
  <hr>
 
  <a href="data-barang.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>
 
  <?php 
    $sql = $conn->query("SELECT * FROM barang INNER JOIN users WHERE id_barang = '".$_GET['id']."'");
    $data = $sql->fetch_assoc();
  ?>
<div class="card mt-3">
    <div class="card-header">
      <?= $data['kategori_barang'] ?>
    </div>
    <div class="card-body">
      <p>Kode Alat : <?= $data['kd_jenis'] ?></p>
      <p>Type Alat : <?= $data['nama_barang'] ?></p>
      <p>Jumlah : <?= $data['jumlah'] ?></p>
      <p>Spesifikasi : <?= $data['spesifikasi'] ?></p>
      <p>Asal Alat : <?= $data['asal_barang'] ?></p>
      <p>Lokasi Ruang Alat : <?= $data['lokasi'] ?></p>
      <p>Tempat Penyimpanan Alat : <?= $data['tempat'] ?></p>
      <p>Tanggal Masuk Alat : <?= $data['tgl_regis'] ?></p>
      <p>Sebagai : <?= $data['nama'] ?></p>
    </div>
  </div>

</div>