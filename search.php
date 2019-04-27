<?php

include '../connect.php';

$cari = $_GET['cari'];
$query = "SELECT * FROM kunjungan WHERE peserta LIKE '%$cari%'";
$result = mysqli_query($connect, $query);
$num = mysqli_num_rows($result);

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Pencarian</title>
     <style media="screen">
     *{
      box-sizing: border-box;
     }
     html,body{
      font-family:Helvetica;
      background-color: skyblue;
     }
     [class*="col-"]{
      padding: 15px; float:left; width: 100%;
     }

     @media only screen and (min-width: 600px;) {
      /*For tablets */
      .col-s-1 {width: 8.33%;}
      .col-s-2 {width: 16.66%;}
      .col-s-3 {width: 25%;}
      .col-s-4 {width: 33.33%;}
      .col-s-5 {width: 41.66%;}
      .col-s-6 {width: 50%;}
      .col-s-7 {width: 58.33%;}
      .col-s-8 {width: 66.66%;}
      .col-s-9 {width: 75%;}
      .col-s-10 {width: 83.33%;}
      .col-s-11 {width: 91.66%;}
      .col-s-12 {width: 100%;}
     }
     @media only screen and(min-width: 768px) {
      /*For desktop */
      .col-1 {width: 8.33%;}
      .col-2 {width: 16.66%;}
      .col-3 {width: 25%;}
      .col-4 {width: 33.33%;}
      .col-5 {width: 41.66%;}
      .col-6 {width: 50%;}
      .col-7 {width: 58.33%;}
      .col-8 {width: 66.66%;}
      .col-9 {width: 75%;}
      .col-10 {width: 83.33%;}
      .col-11 {width: 91.66%;}
      .col-12 {width: 100%;}
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

     .table1 tr:nth-child(even){
      background-color: white;
     }
     td a{
       text-decoration: none;
     }
     </style>
   </head>
   <body>
     <table border='1'class="table1">
       <h2>Data Kunjungan</h2>
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
   </body>
 </html>
