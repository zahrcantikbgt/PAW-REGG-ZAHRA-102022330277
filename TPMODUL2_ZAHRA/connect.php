<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database

    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "db_perpustakaan"; 


// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>