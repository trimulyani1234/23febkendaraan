<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>latihan praukk</title>
</head>
<body>
          
<h1>Data Kendaraan</h1>
<table border = "1" >
 <tr>
          <td>No</td>
          <td>Nama Pemilik</td>
          <td>alamat</td>
          <td>Jenis kelamin</td>
          <td>No Polisi</td>
          <td>Jenis Kendaraan</td>
          <td>Tanggal Member</td>
          <td>Aksi</td>
</tr>

<?php
include("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_pemilik INNER JOIN tb_kendaraan ON tb_pemilik.id_kendaraan = tb_kendaraan.id_kendaraan");
$no = 1;
foreach ($query as $row):
?>

<tr>
<td><?= $no++; ?></td>
<td><?= $row['nama_pemilik']; ?></td>
<td><?= $row['alamat']; ?></td>
<td><?= $row['jenis_kelamin']; ?></td>
<td><?= $row['no_polisi']; ?></td>
<td><?= $row['jenis_kendaraan']; ?></td>
<td><?= $row['tgl_member']; ?></td>
<td>
<a href="edit.php?id_pemilik=<?= $row['id_pemilik']; ?>"><input type="button" name="edit" value="edit"></a>
<a href="hapus.php?id_pemilik=<?= $row['id_pemilik']; ?>"><input type="button" name="edit" value="hapus"></a>
<?php endforeach; ?>

</td>
</tr>
<td><a href="tambah.php"><input type="button" name="tambah" value="tambah"></a></td>
</table>                      
</body>
</html>