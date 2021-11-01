<div class="container mt-5">
 
  <h2>Data Master</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <a href="?p=tambah-master" class="btn btn-primary btn-sm float-right">Tambah Data Master</a>

  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
        <th>No</th>
        <th>Kode Alat</th>
        <th>Kategori Alat</th>
        <th>Type Alat</th>
        <th>Spesifikasi</th>
        <th>Aksi</th>
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
        <td>
          <div class="d-inline">
            <a href="?p=hapus-master&id=<?= $master['kd_jenis']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
          </div>
        </td>
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>