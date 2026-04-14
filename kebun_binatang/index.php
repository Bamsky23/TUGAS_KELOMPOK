<?php include 'config.php'; ?>

<h2>Data Hewan Kebun Binatang</h2>
<a href="tambah.php">Tambah Data</a>

<table border="1">
<tr>
<th>ID</th>
<th>Nama</th>
<th>Jenis</th>
<th>Habitat</th>
<th>Umur</th>
<th>Status</th>
<th>Aksi</th>
</tr>

<?php
$data = mysqli_query($conn, "SELECT * FROM hewan");
while($d = mysqli_fetch_array($data)){
?>
<tr>
<td><?= $d['id_hewan']; ?></td>
<td><?= $d['nama_hewan']; ?></td>
<td><?= $d['jenis']; ?></td>
<td><?= $d['habitat']; ?></td>
<td><?= $d['umur']; ?></td>
<td><?= $d['status_kesehatan']; ?></td>
<td>
<a href="edit.php?id=<?= $d['id_hewan']; ?>">Edit</a>
<a href="hapus.php?id=<?= $d['id_hewan']; ?>">Hapus</a>
</td>
</tr>
<?php } ?>
</table>
