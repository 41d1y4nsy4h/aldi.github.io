<div class="container mt-5">

 <div class="row">
  <div class="col">
   <h2>Data Peminjaman</h2>
  </div>
  <div class="col">
   <a href="data-peminjaman.php?act=cetak" target="_blank"><button class="btn btn-primary float-right">Cetak</button></a>
  </div>
 </div> 

 <div class="clearfix"></div>

 <table class="table table-sm mt-3">
  <thead>
    <tr>
    <th>No</th>
    <th>Kode Alat</th>
    <th>Kategori Alat</th>
    <th>Type Alat</th>
    <th>spesifikasi</th>
    <th>Jumlah Pinjam</th>
    <th>Tgl. Pinjam</th>
    <th>Tgl. Kembali</th>
    <th>Pengembali</th>
    <th>Waktu Pinjam</th>
    <th>Status</th>
    <th>Kondisi Pengembalian Alat</th>
    <th>Sebagai</th>
   </tr>
  </thead>
  <tbody>

   <?php foreach ($data_peminjaman as $data) :
   ?>

   <tr>
    <td><?= $no++; ?></td>
    <td><?= $data['kd_jenis']; ?>
    <td><?= $data['kategori_barang']; ?>
    <td><?= $data['nama_barang']; ?></td>
    <td><?= $data['spesifikasi']; ?></td>
    <td><?= $data['jumlah']; ?></td>
    <td><?= $data['tgl_pinjam']; ?></td>
    <td><?= $data['tgl_kembali']; ?></td>
    <td><?= $data['peminjam']; ?></td>
    <td><?= $data['wkt_pinjam']; ?></td>    
    <td><?= $data['status']; ?></td>    
    <td><?= $data['kondisi']; ?></td>
    <td><?= $data['nama']; ?></td>
    <td>
   </tr>

   <?php endforeach; ?>

  </tbody>
 </table>
</div>