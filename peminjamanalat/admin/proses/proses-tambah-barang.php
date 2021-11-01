<?php

session_start();
require_once '../../config/db.php';
	
if(!isset($_SESSION['user'])) {
 header('Location: ../../index.php');
}

$petugas = $_SESSION['id_user'];

$spesifikasi = $_POST['spesifikasi'];
$jumlah = $_POST['jumlah'];
$asal_barang = $_POST['asal_barang'];
$nama_barang = $_POST['nama_barang'];
$tgl_regis = date('Y-m-d');
$lokasi = $_POST['lokasi'];
$tempat = $_POST['tempat'];
$kd_jenis = $_POST['kd_jenis'];
$kategori_barang = $_POST['kategori_barang'];

if(!isset($spesifikasi, $jumlah, $asal_barang, $nama_barang, $tgl_regis, $lokasi, $tempat)) {
  header('Location: ../data-barang.php?p=tambah-barang');
}
$cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM barang WHERE kd_jenis='$kd_jenis' or nama_barang='$nama_barang'"));
    if ($cek > 0){
    echo "<script>alert('nama atau email yang anda masukan sudah ada');
    window.location='proses-tambah-barang.php'</script>";
    }else {
    $query = mysqli_query($conn,"INSERT INTO barang(id_barang,id_user,spesifikasi, jumlah, asal_barang, nama_barang, tgl_regis, lokasi, tempat, kd_jenis, kategori_barang)
    VALUES ('','$petugas', '$spesifikasi', '$jumlah', '$asal_barang', '$nama_barang', '$tgl_regis', '$lokasi', '$tempat', '$kd_jenis', '$kategori_barang')");
 
    echo "<script>window.alert('DATA SUDAH DISIMPAN')
    window.location='barang.php'</script>";
    }
    
if($cek) {
  header('Location: ../data-barang.php');
} else {
  header('Location: ../data-barang.php?p=tambah-barang');
}

if($query) {
  header('Location: ../data-barang.php');
} else {
  header('Location: ../data-barang.php?p=tambah-barang');
}