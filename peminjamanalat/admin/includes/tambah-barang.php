<script src="jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<?php
require_once '../config/db.php';
?>
<div class="container mt-5">
 
  <h2>Tambah Data Alat</h2>
  <hr>

  <a href="data-barang.php" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>

  <form action="proses/proses-tambah-barang.php" method="POST" class="mt-3" autocomplete="off">
    <div class="form-group">
      <label for="kd_jenis">Kode Alat</label>
       <select list="barang" name="kd_jenis" id="kd_jenis" class="form-control" required>
   
        <?php 
        foreach ($data_master as $barang): 
         $daftar = $barang['kd_jenis'];
        ?>
   
        <option value="<?= $daftar ?>"><?= $daftar ?>
   
        <?php endforeach ?>
   
       </select>
      </div>
    <div class="row">
      <div class="col-md-4">
        <div class="form-group">
      <label for="kategori_barang">Kategori</label>
      <input type="text" class="form-control" name="kategori_barang" id="kategori_barang" cols="45" readonly>
      </div>
    </div>
      <div class="col-md-4">
      <div class="form-group">
      <label for="nama_barang">Type Alat</label>
      <input type="text" class="form-control" name="nama_barang" id="nama_barang" cols="45" readonly>
      </div>
    </div>
      <div class="col-md-4">
        <div class="form-group">
           <label for="spesifikasi">Spesifikasi</label>
           <textarea name="spesifikasi" id="spesifikasi" cols="45" readonly=""></textarea>
        </div>
      </div>
      <div class="col-md-4">
       <div class="form-group">
         <label for="jumlah">Jumlah</label>
         <input type="number" name="jumlah" min="1" placeholder="contoh :1" class="form-control" required>
       </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
   <label for="asal_barang">Asal Alat</label>
   <input type="text" name="asal_barang" class="form-control" required placeholder="Contoh: Hasil dana bos">
 </div>
      </div>
      <div class="col-md-4">
 <div class="form-group">
   <label for="lokasi">Lokasi Ruang Alat</label>
   <input type="text" name="lokasi" class="form-control" required placeholder="Contoh: Ruang Tata Usaha">
 </div>
      </div>
    <div class="col-md-4">
 <div class="form-group">
   <label for="tempat">Tempat Penyimpanan Alat</label>
   <input type="text" name="tempat" class="form-control" required placeholder="Contoh: Lemari Perkakas">
 </div>
      </div>
      <div class="col-md-4">
 <button type="submit" name="simpan" class="btn btn-success btn-sm" style="margin-top:32px; width:100%;"><b>Simpan</b></button>
      </div>
    </div>
  </form>
</div>

<script src="jquery-3.5.1.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script>
        console.log('jQuery =', $);

          $(document).ready(function(){
            $("#kd_jenis").change(function() {
            var kd_jenis = $("#kd_jenis").val();

            //make the ajax call
            $.ajax({
              url: "prosesauto.php",
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