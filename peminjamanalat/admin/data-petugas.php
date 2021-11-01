<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../index.php');
}

// Mengelurkan seluruh data barang yang ada di Database
$sql = "SELECT * FROM users ";
$query = $conn->query($sql);
$data = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';

if (!isset($_GET['p'])) {
  require_once 'includes/petugas.php'; 
} else if ($_GET['p'] == 'tambah-petugas') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'detail-petugas') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'edit-petugas') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'hapus-petugas') {
 
  $hapus = $conn->query("DELETE FROM users WHERE id_user='".$_GET['id']."'");
  if ($hapus) {
    header('Location: data-petugas.php');
  } else {
    header('Location: data-petugas.php');
  }
}

require_once 'includes/footer.php';