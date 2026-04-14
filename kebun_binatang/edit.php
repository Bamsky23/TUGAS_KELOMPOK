<?php include 'config.php'; ?>

<form method="POST">
Nama: <input type="text" name="nama"><br>
Jenis: <input type="text" name="jenis"><br>
Habitat: <input type="text" name="habitat"><br>
Umur: <input type="number" name="umur"><br>
Status: <input type="text" name="status"><br>
<button name="simpan">Simpan</button>
</form>

<?php
if(isset($_POST['simpan'])){
    mysqli_query($conn,"INSERT INTO hewan 
    VALUES('', '$_POST[nama]', '$_POST[jenis]', '$_POST[habitat]', '$_POST[umur]', '$_POST[status]')");
    echo "Data berhasil ditambahkan!";
}
?>
