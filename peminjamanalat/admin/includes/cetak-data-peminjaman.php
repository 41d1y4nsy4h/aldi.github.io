<html>
<head>
<title>Untitled Document</title>
</head>
<body>
  <div class="container">
  <center>
    <h3><img width="100px" height="100px" src="../image/logo.jpg">SMK PGRI 11 JAKARTA</h3>
    <p>Jl.Rorotan VI, RT.7/RW.5,Kel. Rorotan, Kec. Cilincing, Kota Jakarta Utara<p>Daerah Khusus Ibukota Jakarta 14140</p>
</p>
  </center>
  
<div class="container mt-5">

 <div class="row">
  <div class="col">
   <h2>Data Peminjaman</h2>
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

 <div style="text-align: right;">
        <p>Jakarta, <?php echo date('d/m/Y') ?></p>
        <p>Kepala Tata Usaha</p>
        <br><br><br><br><br>
        <p> M.Wartono Sasmita</p>
      </div>
</body>
</html>

<script type="text/javascript">
 window.print();
</script>