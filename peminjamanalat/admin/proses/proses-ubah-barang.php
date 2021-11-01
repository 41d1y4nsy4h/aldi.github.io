<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../../index.php');
}

$id = $_POST['id'];

$spesifikasi = $_POST['spesifikasi'];
$jumlah = $_POST['jumlah'];
$asal_barang = $_POST['asal_barang'];
$nama_barang = $_POST['nama_barang'];
$lokasi = $_POST['lokasi'];
$tempat = $_POST['tempat'];
$petugas = $_SESSION['id_user'];

$update = $conn->query("UPDATE barang SET spesifikasi = '$spesifikasi',
		   jumlah = '$jumlah',
		   asal_barang = '$asal_barang',
		   nama_barang = '$nama_barang',
		   lokasi = '$lokasi',
		   tempat = '$tempat'
		   WHERE id_barang = '$id'");

if ($update) {
  header('Location: ../data-barang.php');
} else {
  header('Location: ../data-barang.php?h=edit-barang');
}