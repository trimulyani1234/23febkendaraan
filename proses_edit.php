<?php
include("koneksi.php");
if(isset($_POST['edit']));
$id_pemilik = $_POST['id_pemilik'];
$nama_pemilik = $_POST['nama_pemilik'];
$alamat = $_POST['alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$no_polisi = $_POST['no_polisi'];
$jenis_kendaraan = $_POST['jenis_kendaraan'];
$tgl_member = $_POST['tgl_member'];

$sql = "UPDATE tb_pemilik set nama_pemilik='$nama_pemilik', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_pemilik='$id_pemilik'";
$query = mysqli_query($db, $sql);
$sql = "UPDATE tb_kendaraan set no_polisi='$no_polisi', jenis_kendaraan='$jenis_kendaraan', tgl_member='$tgl_member' WHERE id_kendaraan='$id_pemilik'";
$query = mysqli_query($db, $sql);
if($query){
    header('location:tampil.php?status=sukses');
} else {
    header('location:tampil.php?status=gagal');
}
?>