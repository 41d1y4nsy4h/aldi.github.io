<?php

session_start();
require_once '../../config/db.php';
	
if(!isset($_SESSION['user'])) {
 header('Location: ../../index.php');
}


$kd_jenis = $_POST['kd_jenis'];
$kategori_barang = $_POST['kategori_barang'];
$nama_barang = $_POST['nama_barang'];
$spesifikasi = $_POST['spesifikasi'];

if(!isset($kd_jenis, $kategori_barang, $nama_barang, $spesifikasi)) {
  header('Location: ../data-master.php?p=tambah-master');
}

$sql = "INSERT INTO tb_jenis VALUES ('$kd_jenis', '$kategori_barang', '$nama_barang', '$spesifikasi')";
$query = $conn->query($sql);

if($query) {
  header('Location: ../data-master.php');
} else {
  header('Location: ../data-master.php?p=tambah-master');
}