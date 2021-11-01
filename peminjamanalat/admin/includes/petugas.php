<div class="container mt-5">
 
  <h2>Data Guru</h2>
  <hr>

  <a href="index.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <a href="?p=tambah-petugas" class="btn btn-primary btn-sm float-right">Tambah Guru</a>
  <div class="clearfix"></div>

  <table class="table table-sm mt-3">
    <thead>
      <tr>
 <th>No</th>
 <th>Nama Guru</th>
 <th>Username</th>
 <th>Password</th>
 <th>Sebagai</th>
 <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      foreach ($data as $r): 
      $r['id_level'] == 1 ? $sebagai = "Admin" : $sebagai = "Operator"; 
      ?>

      <tr>
 <td><?= $no++ ?></td>
 <td><?= $r['nama'] ?></td>
 <td><?= $r['username'] ?></td>
 <td><?= $r['password'] ?></td>
 <td><?= $sebagai ?></td>
        <td>
          <div class="d-inline">
     <a href="?p=detail-petugas&id=<?= $r['id_user'] ?>" class="btn btn-primary btn-sm">Detail</a>
     <a href="?p=edit-petugas&id=<?= $r['id_user'] ?>" class="btn btn-success btn-sm">Edit</a>
     <a href="?p=hapus-petugas&id=<?= $r['id_user'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</a>
     </div>
 </td>
      </tr>
      
      <?php endforeach ?>
    </tbody>
  </table>

</div>