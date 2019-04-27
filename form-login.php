<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <style media="screen">
      body{
        margin: 0;
        padding: 0;
        background-repeat: no-repeat;
        background-size: 100% 675px;
        font-family: sans-serif;
        background-color: darkgrey;
      }
      .login-wrap {
        position: absolute;
        margin: 0 auto;
        background-color: gold;
        background-repeat: no-repeat;
        background-size: cover;
        top: 50%;
        left: 50%;
        width: 350px;
        border-radius: 15px;
        box-shadow: 3px 3px 10px #333;
        padding: 15px;
        transform: translateX(-50%)translateY(-50%);
      }
    .box .label {
      display: block;
      font-family: 'Ubuntu', sans-serif;
      font-size: 18px;
    }
    .box .text input{
      font-style: italic;
      font-size: 16px;
      display: block;
      background-color: ivory ;
      box-sizing : border-box;
	    width: 100%;
	    padding: 10px;
	    margin-bottom: 0;
    }
    .no-access a{
      color:darkblue;
      margin:20px 0px 20px -57%;
      cursor:pointer;
      text-decoration: none;
    }
    .login-submit input[type="submit"] {
      background: #46de4b;
	    color: white;
	    font-size: 15pt;
	    width: 100%;
	    border: none;
	    border-radius: 3px;
	    padding: 10px 20px;
      cursor:pointer;
    }
    @media screen and (max-height: 600px) {
    	.box {
    		margin-top: 0;
    		top: 10px;
    	}
    }
    </style>
  </head>
  <body>
  <div class="login-wrap">
    <h2 align="center" class="judul">Login Karyawan</h2>
    <h5 align="center" class="judul"><font color="darkblue">Untuk melihat data pengunjung</font></h5>
  <div class="box">
    <form action="login.php" method="post">
    <div class="label">
      <label for="">Username :</label>
    </div>
    <div class="text">
      <input type="text" name="username" placeholder="username"><br>
    </div>
      <br>
    <div class="label">
      <label for="">Password :</label>
    </div>
    <div class="text">
      <input type="password" name="password" placeholder="password"><br>
    </div>
      <br>
    <div class="login-submit">
      <input type="submit" value="Login">
    </div>
    <div class="no-access">
      <a href="../museum/index.php"><h4 align="center">Kembali</h4></a>
    </div>
    </form>
  </div>
  </div>
  </body>
</html>
