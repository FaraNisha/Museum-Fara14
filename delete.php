<?php

include '../connect.php';

$no = $_GET['no'];

$query = "DELETE FROM kunjungan WHERE no = $no";

$result = mysqli_query($connect, $query);

$num = mysqli_affected_rows($connect);

if($num > 0)
{
  echo "Berhasil hapus data <br>";
}
else
{
  echo "Gagal hapus data <br>";
}
echo "<a href='read.php'>Lihat Data</a>";
 ?>
