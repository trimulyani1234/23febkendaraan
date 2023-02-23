<?php
include("koneksi.php");
if(!isset($_GET['id_pemilik'])){
    header("location:tampil.php");
}

$id_pemilik=$_GET['id_pemilik'];
$sql="SELECT * FROM tb_kendaraan INNER JOIN tb_pemilik ON tb_kendaraan.id_kendaraan= tb_pemilik.id_kendaraan
WHERE tb_kendaraan.id_kendaraan='$id_pemilik'";
$query=mysqli_query($db,$sql);
$tb_pemilik=mysqli_fetch_assoc($query);
?>

<html>
    <head>
</head>
<body>

    <h2>Edit Data</h2>
    <table border="1">
       <form action="proses_edit.php" method="POST">
       <input type="hidden" name="id_pemilik" value="<?php echo $tb_pemilik['id_pemilik']?>" />
       <tr>
        <td><label for="nama_pemilik"> Nama Pemilik : </label></td>
        <td><input type="text" name="nama_pemilik" value="<?php echo $tb_pemilik['nama_pemilik']?>" /></td>
</tr>
    <tr>
        <td><label for="alamat"> Alamat : </label></td>
        <td><input type="text" name="alamat" value="<?php echo $tb_pemilik['alamat']?>" /></td>
</tr>
    <tr>
        <td><label for="jenis_kelamin"> Jenis Kelamin : </label></td>
        <td><input type="radio" name="jenis_kelamin" value="lakilaki">Laki-laki
        <input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</td>
</tr>
    <tr>
        <td><label for="no_polisi"> No Polisi : </label></td>
        <td><input type="text" name="no_polisi" value="<?php echo $tb_pemilik['no_polisi']?>" /></td>
</tr>
<tr>
        <td><label for="jenis_kendaraan"> Jenis Kendaraan : </label></td>
        <td><input type="radio" name="jenis_kendaraan" value="motor">Motor
        <input type="radio" name="jenis_kendaraan" value="mobil">Mobil</td>
</tr>
    <tr>
        <td><label for="tgl_member"> Tanggal Member : </label></td>
        <td><input type="date" name="tgl_member" value="<?php echo $tb_pemilik['tgl_member']?>" /></td>
</tr>
</table><p>
<td><input type="submit" name="edit" value="edit"></td>


</form>
</body>
</html>