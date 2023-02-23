<!DOCTYPE html>
<html lang="en">
<head>
          <title>from tambah</title>
</head>
<body>

<h1>Tambah Data</h1>
<form action="proses_tambah.php" method="POST">
<table border = "0">
<tr>
<td><label for="nama_pemilik">Nama Pemilik : </label></td>
<td><input type="text" name="nama_pemilik" /></td>
</tr>

<tr>
<td><label for="alamat">Alamat : </label></td>
<td><input type="text" name="alamat" /></td>
</tr>

<tr>
<td><label for="jenis_kelamin">Jenis Kelamin : </label></td>
<td><input type="radio" name="jenis_kelamin" value="laki-laki"/>laki-laki</td>
<td><input type="radio" name="jenis_kelamin" value="perempuan"/>perempuan</td>
</tr>

<tr>
<td><label for="no_polisi">No polisi : </label></td>
<td><input type="number" name="no_polisi" /></td>
</tr>

<tr>
<td><label for="jenis_kendaraan">jenis Kendaraan : </label></td>
<td><input type="radio" name="jenis_kendaraan" value="motor"/>motor</td>
<td><input type="radio" name="jenis_kendaraan" value="mobil"/>mobil</td>
</tr>

<tr>
<td><label for="tgl_member">Tanggal Member : </label></td>
<td><input type="date" name="tgl_member" /></td>
</tr>

<tr>
<td><input type="submit" name="submit" value="submit" ></td>
</tr>

</border>
</body>
</html>