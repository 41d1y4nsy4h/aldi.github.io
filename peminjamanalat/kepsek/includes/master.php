<div class="container mt-5">
 
  <h2>Data Master</h2>
  <hr>


  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Alat</th>
        <th>Kategori Alat</th>
        <th>Merk dan Type Alat</th>
        <th>Spesifikasi</th>

      </tr>
    </thead>
    <tbody>
      <?php foreach($data_master as $master): ?>
      
      <tr>
        <td><?= $no++;?></td>
        <td><?= $master['kd_jenis']; ?>
        <td><?= $master['kategori_barang']; ?>
        <td><?= $master['nama_barang']; ?>
        <td><?= $master['spesifikasi']; ?>
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>