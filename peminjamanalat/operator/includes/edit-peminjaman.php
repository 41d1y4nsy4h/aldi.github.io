<?php
include '../config/db.php';
$id         = $_GET['id'];
$detail  = mysqli_query($conn, "select * from detail_pinjam WHERE id_detail='$id'");
$row        = mysqli_fetch_array($detail);

?>
<div class="container mt-5">
 
  <h2>Pengembalian Alat</h2>
  <hr>

  <a href="data-peminjaman.php" class="btn btn-primary btn-sm float-left">← kembali</a>
  <div class="clearfix"></div>

  <form action="proses/proses-ubah-peminjaman.php" id="my-form" method="POST" class="mt-3">
    <input type="hidden" name="id" value="<?php echo $row['id_detail'];?>">
    <div class="form-group">
      <div class="form-group">
            <label for="varchar">Status</label>
            <input name="status" class="form-control" required readonly option value="Dikembalikan">
            </select>
            </div>
    </div>
    <div class="form-group">
      <div class="form-group">
            <label for="kondisi">Kondisi</label>
   <input type="text" name="kondisi" class="form-control" required value="<?php echo $row['kondisi'];?>">
            </div>

    </div>
      <div class="col-md-4">
 <!-- <input type="submit" name="simpan" value='Submit' id='btClickMe' 
            onclick='save(); this.disabled = true;'  /> -->
 <button type="submit" class="btn btn-success btn-block" name="submit" <?php if (($row['kondisi']) ==! Null){ ?> disabled <?php   } ?>>Simpan</button>

<script>
    function save() {
        var btClickMe = document.getElementById('btClickMe');
        btClickMe.innerHTML = 'Data submitted and the button disabled &#9786;';
    }
</script>
      </div>
    </div>
  </form>

</div>