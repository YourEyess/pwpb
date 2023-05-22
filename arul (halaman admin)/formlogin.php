<?php
include 'funcion.php';
if (isset($_POST("login"))){
  //tampung data dari form
  $user = $_POST("username");
  $pass = $_POST("password");

  //query ke data
  $cek = mysqli_query($conn,"SELECT * FROM login where username = $user");
  if(mysqli_num_rows)($cek)===1);

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>form login</title>
    <link rel="stylesheet" type="text/css" href="style1.css" />
  </head>
  <body>
    <div class="kotak_login">
      <p class="tulisan_login">Silahkan login</p>

      <form action="" method="post">
        <label>Username</label>
        <input type="text" name="username" class="form_login" placeholder="Username atau email .." />

        <label>Password</label>
        <input type="password" name="password" class="form_login" placeholder="Password .." />

        <input type="submit" class="tombol_login" value="LOGIN" />
        <center>
          <a class="link" href="produk.php">Kembali</a>
        </center>
      </form>
    </div>
  </body>
</html>