<?php  

$host = "localhost";
$user = "root";
$pass = "";
$database = "blog";

$conn = mysqli_connect($host,$user,$pass,$database);

if(!$conn) {
	echo "koneksi gagal";
}

include 'fungsi.php';
include 'fungsiKomentar.php';
?>