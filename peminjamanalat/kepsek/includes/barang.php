<div class="container mt-5">
 
  <h2>Data Alat</h2>
  <hr>

  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Alat</th>
        <th>Kategori Alat</th>
        <th>Type Alat</th>
        <th>Spesifikasi</th>
        <th>Jumlah</th>
        <th>Asal Alat</th>
        <th>Lokasi Ruang Alat</th>
        <th>Tempat Penyimpanan Alat</th>
        <th>Tanggal Alat Masuk</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($data_barang as $barang): ?>
      
      <tr>
        <td><?= $no++;?></td>
        <td><?= $barang['kd_jenis']; ?>
        <td><?= $barang['kategori_barang']; ?>
        <td><?= $barang['nama_barang']; ?>
        <td><?= $barang['spesifikasi']; ?>
        <td><?= $barang['jumlah']; ?>
        <td><?= $barang['asal_barang']; ?>
        <td><?= $barang['lokasi']; ?>
        <td><?= $barang['tempat']; ?>
        <td><?= $barang['tgl_regis']; ?>
        <td>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>