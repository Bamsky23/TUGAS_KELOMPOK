<?php
include 'config.php';
$id = $_GET['id'];

mysqli_query($conn,"DELETE FROM hewan WHERE id_hewan=$id");

header("Location: index.php");
?>