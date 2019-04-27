<?php

include '../connect.php';

$no = $_GET['no'];
$tujuan = $_POST['tujuan'];
$sekolah = $_POST['sekolah'];
$peserta = $_POST['peserta'];
$tanggal = $_POST['tanggal'];
$jam = $_POST['jam'];
$namapj = $_POST['namapj'];
$telp = $_POST['telp'];
$email = $_POST['email'];

$query = "UPDATE kunjungan SET tujuan ='$tujuan', sekolah ='$sekolah', peserta ='$peserta',
tanggal ='$tanggal', jam ='$jam', namapj ='$namapj', telp ='$telp', email ='$email' WHERE no = $no";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  echo "Berhasil update data <br>";
}
else
{
  echo "Gagal update data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";
 ?>
