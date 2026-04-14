<?php
$conn = mysqli_connect("localhost", "root", "", "kebun_binatang");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>