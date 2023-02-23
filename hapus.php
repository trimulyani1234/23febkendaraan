<?php
include ("koneksi.php");


$id_pemilik= $_GET['id_pemilik'];
$sql = "DELETE FROM tb_kendaraan WHERE id_kendaraan='$id_pemilik'";
$sql = "DELETE FROM tb_pemilik WHERE id_pemilik='$id_pemilik'";

$query = mysqli_query($db, $sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>