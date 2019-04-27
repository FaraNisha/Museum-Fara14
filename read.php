<?php

include '../connect.php';

$query = "SELECT * FROM kunjungan";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Data Pengunjung</title>
     <style media="screen">
     *{
      box-sizing: border-box;
     }
     html,body{
      font-family:Helvetica;
      background-color: skyblue;
     }

     header{
      text-align: center;
     }
     .table1{
      font-family: sans-serif;
      color: black;
      border-collapse: collapse;
      width: 100%;
      border: 2px solid black;
     }

     .table1 tr th{
      background: darkblue;
      color: white;
      font-weight: normal;
      font-size: 16px;
     }

     .table, th, td{
      padding: 8px 20px;
      text-align: center;
     }
     .table1 tr{
      background-color: lightcyan;
     }
     .table1 tr:nth-child(even){
      background-color: white;
     }
     .link{
      padding:5px 15px;
      display:block;
    }
     .klik{
     cursor:pointer;
     padding: 10px;
     width: 9%;
     height: auto;
     display: block;
     background-color: darkgrey;
     font-size: 17px;
     border: 5px solid skyblue;
     border-radius: 7px;
      }
      .klik a {
        text-decoration: none;
        color: black;
      }
      td a {
        text-decoration: none;

      }
     </style>
   </head>
   <body>
     <form action="search.php" method="get">
       <input type="search" name="cari" placeholder="Nama yang dicari...">
       <input type="submit" value="Cari">
     </form>
     <table border='1' class="table1">
       <h2 align="center">Data Kunjungan</h2>
       <tr>
         <th>No.</th>
         <th>Tujuan Kunjungan</th>
         <th>Instansi/Sekolah</th>
         <th>Nama Peserta</th>
         <th>Tanggal/Waktu</th>
         <th>Jam Kunjung</th>
         <th>Penanggung Jawab</th>
         <th>No.telp/HP</th>
         <th>Email</th>
         <th colspan="2">Aksi</th>
       </tr>
       <?php
            if($num > 0)
            {
              $no = 1;
              while($data = mysqli_fetch_assoc($result))
              {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $data['tujuan'] . "</td>";
                echo "<td>" . $data['sekolah'] . "</td>";
                echo "<td>" . $data['peserta'] . "</td>";
                echo "<td>" . $data['tanggal'] . "</td>";
                echo "<td>" . $data['jam'] . "</td>";
                echo "<td>" . $data['namapj'] . "</td>";
                echo "<td>" . $data['telp'] . "</td>";
                echo "<td>" . $data['email'] . "</td>";
                echo "<td><a href='form-update.php?no=" . $data['no'] . "'><b>Edit</b></a> ";
                echo "<td><a href='delete.php?no=" . $data['no'] . "' onclick='return confirm(\"Apakah anda ingin menghapus data ?\")' ><b>Hapus</b></a></td>";
                echo "</tr>";

                $no++;
              }
            }
            else {
              echo "<td colspan = '3'>Tidak ada data</td>";
            }
        ?>
      </table>
      <br>
      <div class="link">
        <div class="klik">
          <a href="kunjungan.php">Daftar Lagi</a>
        </div>
          <div class="klik">
            <a href="../museum/index.php">Keluar</a>
          </div>
  		</div>
   </body>
 </html>
