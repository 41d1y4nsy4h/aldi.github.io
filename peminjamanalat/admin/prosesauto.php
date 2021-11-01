<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "peminjamanalat";
 
$koneksi = mysqli_connect($host,$user,$password,$database);
$kd_jenis=$_POST['kd_jenis'];

$sql = "SELECT * FROM tb_jenis WHERE kd_jenis = '$kd_jenis'";

if ($result = mysqli_query($koneksi, $sql)) {
	
		echo json_encode($result->fetch_assoc());
	} 
	else {
		echo json_encode(http_response_code(401));
	}
    mysqli_close($koneksi);
    

?>