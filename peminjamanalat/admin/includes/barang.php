<div class="container mt-5">
 
  <h2>Data Alat</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <a href="?p=tambah-barang" class="btn btn-primary btn-sm float-right">Tambah Data</a>

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
        <th>Petugas</th>
        <th>Aksi</th>
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
        <td><?= $barang['nama']; ?>
        <td>
          <div class="d-inline">
            <a href="?p=detail-barang&id=<?= $barang['id_barang']; ?>" class="btn btn-primary btn-sm">Detail</a>
            <a href="?p=edit-barang&id=<?= $barang['id_barang']; ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="?p=hapus-barang&id=<?= $barang['id_barang']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
          </div>
        </td>
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>

</div>