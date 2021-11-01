<?php

session_start();

require_once '../config/db.php';

// mencegah sql injection menggunakan fungsi mysql_real_escape_string()
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

if(empty($username) || empty($password) || empty($level)) {
  header('Location: ../index.php');
}

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$query = $conn->query($sql);
$result = $query->fetch_assoc();
var_dump($result);

if($query->num_rows > 0) {
  $_SESSION['name'] = $result['nama'];
  $_SESSION['id_user'] = $result['id_user'];

  if($result['id_level'] == 1) {
    header('Location: ../admin/index.php');
  } else {
    header('Location: ../operator/index.php');
  }

  if($result['id_level'] == 3) {
    header('Location: ../kepsek/index.php');
  }
} else {
  $_SESSION['error'] = "<b>Username</b> atau <b>password</b> salah, silahkan coba lagi";
  header('Location: ../index.php');
}

?>