<?php
session_start();
require_once '../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../index.php');
}

// Mengelurkan seluruh data barang yang ada di Database
$sql = "SELECT * FROM tb_jenis";
$query = $conn->query($sql);
$data_master = $query->fetch_all(MYSQLI_ASSOC);

// Nomor untuk increment baris tabel
$no = 1;

require_once 'includes/header.php';

if (!isset($_GET['p'])) {
  require_once 'includes/master.php'; 
} else if ($_GET['p'] == 'tambah-master') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'edit-master') {
  require_once 'includes/'.$_GET['p'].'.php'; 
} else if ($_GET['p'] == 'hapus-master') {
 
  $hapus = $conn->query("DELETE FROM tb_jenis WHERE kd_jenis='".$_GET['id']."'");
  if ($hapus) {
    header('Location: data-master.php');
  } else {
    header('Location: data-master.php');
  }
  
  } else if ($_GET['p'] == 'tambah-barang') {
  require_once 'includes/'.$_GET['p'].'.php'; 
}

require_once 'includes/footer.php';