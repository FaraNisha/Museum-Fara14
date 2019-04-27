<?php
include '../connect.php';

$no = $_GET['no'];

$query = "SELECT * FROM kunjungan WHERE no = $no";

$result = mysqli_query($connect, $query);

$row = mysqli_connect_error($result);

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <title>Mengubah Data</title>
     <style media="screen">
     *{
      box-sizing:border-box;
      margin:0 auto;
     }
     html,body{
      font-family:Helvetica;
      background-color: skyblue;
     }
     .fa-user{
         color: #2c79c0;
         padding: 0 10px;
         position: relative;
         float: left;
     }
     .fa-hand-o-right{
      float:right;
     }
     form {
      top:10px;
      position:relative;
      width:100%;
      max-width:400px;
      background-color:#FFFFFF;
      border-radius:3px;
      box-shadow:0px 0px 3px black;
     }
     form h2 {
      padding:20px;
      border-bottom:2px solid #60a4e3;
      text-align:center;
     }
     .form-group{
      padding:5px 15px;
      display:block;
     }
     .input-mode{
      border:1px solid silver;
      border-radius:3px;
      font-size:15px;
      height:50px;
      padding:0 10px;
      display:block;
      width:100%;
     }
     .cek {
      padding:10px;
      display:inline-block;
      height:20px;
      width:20px;
     }
     .btn-submit{
      cursor:pointer;
      padding: 10px;
      height: 50px;
      width: 100%;
      display: block;
      background-color: #2c79c0;
      color: white;
      font-size: 20px;
      border: 2px solid #135592;
      border-radius: 2px;
      text-decoration: none;
     }
     .form-cek label{
      display:inline-block;
      padding:10px;
      line-height:10px;
     }
     </style>
   </head>
   <body>
     <form action="update.php?no=<?php echo $_GET['no']; ?>" method="post">
       <h2> <i class="fa fa-user"></i> Masukkan Data </h2>
       <div class="form-group form-cek">
        <input type="radio" name="tujuan" value="Kunjungan" id="cek-kunjungan" class="cek"><label for="cek-kunjungan">Kunjungan</label>
        <input type="radio" name="tujuan" value="Magang" id="cek-magang" class="cek"><label for="cek-magang">Magang</label>
        <input type="radio" name="tujuan" value="Penelitian" id="cek-penelitian" class="cek"><label for="cek-penelitian">Penelitian</label>
       </div>
       <div class="form-group">
        <input value="<?php echo $row['sekolah']; ?>" type="text" name="sekolah" id="sekolah" class="input-mode" placeholder="Instansi/Sekolah">
       </div>
       <div class="form-group">
       <input value="<?php echo $row['peserta']; ?>" type="text" name="peserta" id="peserta" class="input-mode" placeholder="Nama Peserta">
       </div>
       <div class="form-group">
       <input value="<?php echo $row['tanggal']; ?>" type="text" name="tanggal" id="tanggal" class="input-mode" placeholder="Tanggal/Waktu kunjung (Tanggal-Bulan-Tahun)">
       </div>
       <div class="form-group">
       <input value="<?php echo $row['jam']; ?>" type="text" name="jam" id="jam" class="input-mode" placeholder="Jam Kunjung (00.00 WIB)">
       </div>
       <div class="form-group">
       <input value="<?php echo $row['namapj']; ?>" type="text" name="namapj" id="namapj" class="input-mode" placeholder="Penanggung Jawab">
       </div>
       <div class="form-group">
       <input value="<?php echo $row['telp']; ?>" type="text" name="telp" id="telp" class="input-mode" placeholder="No.Telp/HP">
       </div>
       <div class="form-group">
       <input value="<?php echo $row['email']; ?>" type="text" name="email" id="email" class="input-mode" placeholder="Email">
       </div>
       <div class="form-group">
        <input value="<?php echo $row['no']; ?>" type="hidden" name="no"></td>
        <button class="btn btn-submit" type="submit" name="kirim"><h5 align="center">Update Data &nbsp; </h5><i class="fa fa-hand-o-right" aria-hidden="true"></i></button>
       </div>
       <div class="form-group">
        <a class="btn btn-submit" href="../museum/index.php"><h5 align="center">Kembali</h5></a>
       </div>
       <br/>
     </form>
   </body>
 </html>
