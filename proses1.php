<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "test";
$koneksi = mysqli_connect($server, $username, $password, $database);
$longitude = isset($_GET['longitude']) ? $_GET['longitude'] : false;
$latitude = isset($_GET['latitude']) ? $_GET['latitude'] : false;
$kueriSimpan = mysqli_query($koneksi, "UPDATE tracker1 SET lat='$latitude' , lng='$longitude' WHERE id = 1");
mysqli_close($koneksi);
?>