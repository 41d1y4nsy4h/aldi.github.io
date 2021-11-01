<div class="container mt-5">

  <div class="row text-center">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
 
          <?php 
          $sql = $conn->query("SELECT COUNT(*) AS jmlPinjam FROM detail_pinjam");
          $pinjam = $sql->fetch_assoc();
          ?>

          <h5 class="card-title">Data Peminjaman</h5>
          <p class="card-text">Data barang yang dipinjam</p>
          <h3><?= $pinjam['jmlPinjam']; ?></h3>
          <a href="data-peminjaman.php" class="card-link">Lihat Data Peminjaman</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
 
          <?php 
          $sql = $conn->query("SELECT COUNT(*) AS jmlBarang FROM barang");
          $barang = $sql->fetch_assoc();
          ?>
 
          <h5 class="card-title">Data Alat</h5>
          <p class="card-text">Jumlah Alat yang dapat dipinjam saat ini</p>
          <h3><?= $barang['jmlBarang']; ?></h3>
          <a href="data-barang.php" class="card-link">Lihat Data Alat</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          
          <?php 
          $sql = $conn->query("SELECT COUNT(*) AS jmlOpt FROM users");
          $opt = $sql->fetch_assoc();
          ?>

          <h5 class="card-title">Data User</h5>
          <p class="card-text">Jumlah User saat ini</p>
          <h3><?= $opt['jmlOpt']; ?></h3>
          <a href="data-petugas.php" class="card-link">Lihat Data Petugas</a>
        </div>
      </div>
    </div>
    <div class="row text-center">
    <div class="col-md-4">
      <div class="card" style="width: 18rem;">
        <div class="card-body">
 
          <?php 
          $sql = $conn->query("SELECT COUNT(*) AS jmlMsr FROM tb_jenis");
          $pinjam = $sql->fetch_assoc();
          ?>

          <h5 class="card-title">Data Master</h5>
          <p class="card-text">Data Master Alat Pengajar</p>
          <h3><?= $pinjam['jmlMsr']; ?></h3>
          <a href="data-master.php" class="card-link">Lihat Data Master</a>
        </div>
      </div>
    </div>
  </div>
  </div>

</div>
