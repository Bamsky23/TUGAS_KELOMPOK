<?php

// setup koneksi ke db
$host = "localhost";
$username = "root";
$password = "";
$database = "mahasiswa";

// sambung koneksi
$conn = mysqli_connect($host, $username, $password, $database);

// cek koneksi
if ($conn->connect_error) {
    echo "gagal nyambung ke database";
    exit();
}

echo "berhasil nyambung ke database";

// menutup koneksi klo udah selesai
// $conn->close();
?>