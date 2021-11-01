<script src="jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<div class="container mt-5">
<style type="text/css">
  table.scroll {
    width:1110px;
    border:1px #a9c6c9 solid;
  }
  table.scroll thead {
    display:table;
    width:100%;
  }
  table.scroll tbody {
    display:block;
    height:100px;
    overflow:auto;
    float:left;
    width:100%;
  }
  table.scroll tbody tr {
    display:table;
    width:100%;
  }
  table.scroll th, td {
    width:10%;
    padding:5px;
  }
</style>
<table  class="scroll">
    <thead>
      <h3>List Alat Pengajar</h3>
      <tr>
        <th>No</th>
        <th>Kode Alat</th>
        <th>Kategori Alat</th>
        <th>Nama Alat</th>
        <th>Spesifikasi</th>
        <th>Jumlah</th>
        
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
      </tr>
      
      <?php endforeach; ?>
    </tbody>
  </table>
 <div class="card">
  <div class="card-body">
   <div class="row">
    <div class="col-md-6">
     <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" class="mt-3" autocomplete="off">
      <div class="form-group">
      <label for="kd_jenis">Kode Alat</label>
       <select list="barang" id="kd_jenis" name="kd_jenis" class="form-control" required>
   
        <?php 
        foreach ($data_barang as $barang): 
         $daftar = $barang['kd_jenis'];
        ?>
   
        <option value="<?= $daftar ?>"><?= $daftar ?>
   
        <?php endforeach ?>
   
       </select>
      </div>
      <div class="form-group">
       <label for="kategori_barang">Kategori</label>
       <input type="text" name="kategori_barang" id="kategori_barang" class="form-control" required readonly>
      </div>
      <div class="form-group">
       <label for="nama_barang">Type Alat</label>
       <input type="text" name="nama_barang" id="nama_barang" class="form-control" required readonly>
      </div>
      <div class="col-md-4">
        <div class="form-group">
           <label for="spesifikasi">Spesifikasi</label>
           <textarea name="spesifikasi" id="spesifikasi" cols="45" readonly=""></textarea>
        </div>
      </div>
      <div class="form-group">
       <label for="jumlah_barang">Jumlah Pinjam</label>
       <input type="number" name="jumlah_pinjam" placeholder="Jumlah Alat Yang Ingin Dipinjam" min="1" max="2" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary float-right">Cek Alat</button>
      <div class="clearfix"></div>
     </form>
    </div>
    <div class="col-md-6">
     <h3>Data Peminjaman</h3>

     <?php 
     if (isset($_POST['kd_jenis'], $_POST['kategori_barang'], $_POST['nama_barang'], $_POST['spesifikasi'], $_POST['jumlah_pinjam'])) {
      
      $kd_jenis = trim($_POST['kd_jenis']);
      $kategori_barang = trim($_POST['kategori_barang']);
      $nama_barang = trim($_POST['nama_barang']);
      $spesifikasi = trim($_POST['spesifikasi']);
      $explode_nama_barang = explode("-", $nama_barang);
      $nama_barang_exploded = $explode_nama_barang[0];
      $jumlah_pinjam  = $_POST['jumlah_pinjam'];
      $id_user   = $_SESSION['id_user'];

      $barang = $conn->query("SELECT * FROM barang WHERE nama_barang='".$nama_barang_exploded."'");
      $data_barang  = $barang->fetch_array();

      if(!isset($_SESSION['list_peminjaman'])) {
       $_SESSION['list_peminjaman'] = [];
      }

      $pinjam = 1;
      $index = -1;
      $ls_pmj = unserialize(serialize($_SESSION['list_peminjaman']));

      // jika barang sudah ada di daftar list maka akan diupdate
      for ($i=0; $i<count($ls_pmj); $i++) {
       if($ls_pmj[$i]['nama_barang'] == $nama_barang) {
        $index = $i;
        if($jumlah_pinjam <= $data_barang['jumlah']) {
         $_SESSION['list_peminjaman'][$i]['jumlah_pinjam'] = $jumlah_pinjam;
        } else {
         echo '<div class="alert alert-danger" role="alert"><b>'.$nama_barang.'</b> hanya tersedia <b>'.$data_barang['jumlah'].'</b></div>';
        }
        break;
       }
      }

      // jika list peminjaman kosong
      if($index == -1) {
       if($data_barang['jumlah'] >= $jumlah_pinjam) {
        $_SESSION['list_peminjaman'][] = [
                       'id_barang' => $data_barang['id_barang'], 
                       'kd_jenis' => $kd_jenis,
                       'kategori_barang' => $kategori_barang,
                       'nama_barang' => $nama_barang,
                       'spesifikasi' => $spesifikasi, 
                       'jumlah_pinjam' => $jumlah_pinjam
                      ];
       } else {
        echo '<div class="alert alert-danger" role="alert"><b>'.$nama_barang.'</b> hanya tersedia <b>'.$data_barang['jumlah'].'</b></div>';
        
       }
      }
     }

     ?>

      <table class="table table-bordered">
       <tr align="center">
        <th>Kode Alat</th>
        <th>Kategori Alat</th>
        <th>Type Alat</th>
        <th>Spesifikasi</th>
        <th>Jumlah pinjam</th>
        <th>Aksi</th>
       </tr>
        
       <?php 
       if(isset($_SESSION['list_peminjaman'])) {
          $list = unserialize(serialize($_SESSION['list_peminjaman']));
          $index = 0;
         for($i=0; $i<count($list); $i++) {
         ?>

         <tr>
           <td><?php echo $list[$i]['kd_jenis']; ?></td>
           <td><?php echo $list[$i]['kategori_barang']; ?></td>
           <td><?php echo $list[$i]['nama_barang']; ?></td>
           <td><?php echo $list[$i]['spesifikasi']; ?></td>
           <td align="center"><?php echo $list[$i]['jumlah_pinjam']; ?></td>
           <td align="center">
            <a href="?index=<?php echo $index; ?>" onclick="return confirm('Anda yakin?')">Hapus</a>
           </td>
          </tr>

         <?php 
          $index++;
         } 

         // hapus barang pada cart
        if(isset($_GET['index'])) {
         $list = unserialize(serialize($_SESSION['list_peminjaman']));
         unset($list[$_GET['index']]);
         $list = array_values($list);
         $_SESSION['list_peminjaman'] = $list;
        }
       }
        ?>

      </table>
     
     <hr>

     <form method="POST" action="proses/proses-peminjaman.php">
      <input type="hidden" name="id_user" value="<?= $_SESSION['id_user']; ?>">
      <div class="row">
       <div class="col-md-6">
        <div class="form-group">
         <label for="tgl_pinjam">Tanggal Pinjam</label>
         <input class="form-control" type="date" name="tgl_pinjam" id="tgl_pinjam" required>
        </div>
       </div>
       <div class="form-group">
         <label for="tgl_kembali">Tanggal Pengembalian</label>
         <input class="form-control" type="date" name="tgl_kembali" id="tgl_kembali" required>
        </div>
       </div>
      <div class="row">
       <div class="col-md-6">
        <div class="form-group">
         <label for="peminjam">Pengembali</label>
         <input class="form-control" type="text" name="peminjam" id="peminjam" placeholder="Masukan Nama" required>
        </div>
       </div>
       <div class="form-group">
         <label for="status">Status</label>
         <input class="form-control" type="text" name="status" id="status" required readonly option value="Dipinjam"</option>
        </div>
        <input type="hidden" name="kondisi" id="kondisi" required option value=""</option>
       </div>
       <form>
        <fieldset>
      <p>Waktu Peminjaman:</p>
        <p><input type="time" name="wkt_pinjam" min="07:00" max="15:00" ></p>
    <button type="submit" class="btn btn-success btn-block" name="submit">Proses Peminjaman Alat</button>
      </fieldset>
       </form>
       <div class="clearfix"></div>
      </div>
      
     </form>

    </div>
   </div>
  </div>
 </div>
</div>

<?php 
 if(isset($_GET["index"])){
  header('Location: index.php');
 }
?>
<script src="jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
        console.log('jQuery =', $);

          $(document).ready(function(){
            $("#kd_jenis").change(function() {
            var kd_jenis = $("#kd_jenis").val();

            //make the ajax call
            $.ajax({
              url: "../admin/prosesauto.php",
              type: 'POST',
              dataType : 'JSON',
              data: {kd_jenis : kd_jenis},
              success: function(response) {
                $('#nama_barang').val(response.nama_barang);
                $('#kategori_barang').val(response.kategori_barang);
                $('#spesifikasi').val(response.spesifikasi);
              }
            });
          });
          });
</script>