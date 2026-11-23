<?php
$host = "localhost";
$user = "root"; // User default MySQL XAMPP
$password = ""; // Password default MySQL XAMPP (kosong)
$dbname = "sekolah_db";

$koneksi = mysqli_connect($host, $user, $password, $dbname);

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
