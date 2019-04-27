<?php

include '../connect.php';

$tujuan = $_POST['tujuan'];
$sekolah = $_POST['sekolah'];
$peserta = $_POST['peserta'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$namapj = $_POST['namapj'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$query = "INSERT INTO kunjungan (tujuan, sekolah, peserta, tanggal, jam, namapj, telp, email)
          VALUES ('$tujuan', '$sekolah', '$peserta', '$tanggal', '$jam', '$namapj', '$telp', '$email')";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{echo "Berhasil Tambah Data";}
else
{echo "Gagal Tambah Data";}

echo "<a href = 'read.php'>Lihat Data</a>";
 ?>
