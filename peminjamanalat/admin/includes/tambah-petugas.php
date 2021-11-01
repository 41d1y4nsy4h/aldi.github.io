<div class="container mt-5">
 
  <h2>Tambah Data Petugas</h2>
  <hr>
 
  <a href="data-petugas.php" class="btn btn-primary btn-sm float-left">← Kembali</a>
  <div class="clearfix"></div>

  <form action="proses/proses-tambah-petugas.php" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="nama">Nama Guru</label>
      <input type="text" name="nama" placeholder="Nama Guru" class="form-control" autofocus required>
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" name="username" placeholder="Masukan Username" class="form-control" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="text" name="password" placeholder="Masukan Password" class="form-control" required>
    </div>
    <div class="form-group">
       <label for="sebagai">Sebagai</label>
      <select name="sebagai" class="form-control">
            <option value="2">Operator</option>
            <option value="1">Admin</option>
            <option value="3">Kepala Sekolah</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary float-right">Tambah Petugas</button>
  </form>

</div>