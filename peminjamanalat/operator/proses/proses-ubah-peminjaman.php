<?php
session_start();
require_once '../../config/db.php';

if (!isset($_SESSION['id_user'])) {
  header('Location: ../../index.php');
}

$id = $_POST['id'];

$status = $_POST['status'];
$kondisi = $_POST['kondisi'];
$update = $conn->query("UPDATE detail_pinjam SET status = '$status',
			kondisi = '$kondisi'
		   WHERE id_detail = '$id'");

if ($update) {
  header('Location: ../data-peminjaman.php');
} else {
  header('Location: ../data-peminjaman.php?h=edit-peminjaman');
}