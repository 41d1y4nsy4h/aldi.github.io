<center>
  <h2>Data Berhasil Di Input</h2>
  <a href="../data-peminjaman.php">Klik Disini Untuk Lihat Daftar Peminjaman</a>
</center>
<?php
session_start();
require_once '../../config/db.php';
$dt_pinjam = NULL;

if(isset($_POST['submit']) && isset($_SESSION['list_peminjaman'])) {
 foreach ($_SESSION['list_peminjaman'] as $list) {
  $explode = explode("-", $list['nama_barang']);
  $kd_jenis = trim($explode[0]);
  $kategori_barang = trim($explode[0]);
  $spesifikasi = trim($explode[0]);
  $nama_barang = trim($explode[0]);
  
  $barang = $conn->query("SELECT * FROM barang WHERE nama_barang='$nama_barang'");
  $dt_barang = $barang->fetch_assoc();


  $sisa = ($dt_barang['jumlah'] - $list['jumlah_pinjam']);

  $update_dt_brg = $conn->query("UPDATE barang SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");

  $status = $_POST['status'];
  $kondisi = $_POST['kondisi'];
  $tgl_pinjam = $_POST['tgl_pinjam'];
  $tgl_kembali = $_POST['tgl_kembali'];
  $wkt_pinjam = $_POST['wkt_pinjam'];
  $peminjam = $_POST['peminjam'];
  $id_user = $_POST['id_user'];

  $peminjaman = $conn->query("INSERT INTO peminjaman VALUES ('', '$id_user', '$tgl_pinjam', '$tgl_kembali', '$wkt_pinjam')");

  $detail_pinjam = $conn->query("INSERT INTO detail_pinjam VALUES ('', '$list[id_barang]', '$list[jumlah_pinjam]', '$peminjam', '$status', '$kondisi', (SELECT id_peminjaman FROM peminjaman ORDER BY id_peminjaman DESC LIMIT 1))");

  $update_dt_brg = $conn->query("UPDATE barang SET jumlah = '$sisa' WHERE id_barang = '$dt_barang[id_barang]'");
 } 
 unset($_SESSION['list_peminjaman']);
}