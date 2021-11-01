<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
 header('Location: ../index.php');
}

// ambil data
$sql = "SELECT b.nama_barang, b.spesifikasi, b.kd_jenis, b.kategori_barang, d.id_detail, d.jumlah, d.peminjam, d.status, d.kondisi, p.tgl_pinjam, p.tgl_kembali, p.wkt_pinjam, u.nama FROM detail_pinjam AS d INNER JOIN barang AS b ON d.id_barang = b.id_barang INNER JOIN peminjaman AS p ON d.id_peminjaman = p.id_peminjaman INNER JOIN users AS u ON p.id_user = u.id_user";
$query = $conn->query($sql);
$data_peminjaman = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';
if (!isset($_GET['p'])) {
  require_once 'includes/detail-peminjaman.php'; 
} else if ($_GET['p'] == 'tambah-peminjaman') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'detail-peminjaman') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'edit-peminjaman') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'hapus-peminjaman') {
 
  $hapus = $conn->query("DELETE FROM peminjaman WHERE id_peminjaman='".$_GET['id']."'");
  if ($hapus) {
    header('Location: data-peminjaman.php');
  } else {
    header('Location: data-peminjaman.php');
  }
}

require_once 'includes/footer.php';