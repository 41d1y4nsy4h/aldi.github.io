<div class="container mt-5">
 
  <h2>Data Alat</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>

  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Alat</th>
        <th>Spesifikasi</th>
        <th>Jumlah</th>
        
      </tr>
    </thead>
    <tbody>
      <?php foreach($data_barang as $barang): ?>
      
      <tr>
        <td><?= $no++;?></td>
        <td><?= $barang['nama_barang']; ?>
        <td><?= $barang['spesifikasi']; ?>
        <td><?= $barang['jumlah']; ?>     
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>