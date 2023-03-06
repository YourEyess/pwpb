<?php
  $koneksi = mysqli_connect("10.6.50.211:3306","root","root","projekpkk");
?>
<?php
  $hasil = mysqli_query($koneksi,"SELECT*FROM admin");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- My style -->
  <link rel="stylesheet" href="style.css">
  <title>Administrator</title>
</head>
<body>
  
<div class="container">
  <div class="sidebar">
     <div class="header">
      <img src="ikan.jpg" alt="">
     </div>
     <div class="main">
     <div class="list-item">
      <a href="">Admin</a>
     </div>
     <div class="list-item">
          <a href="">Produk</a>
         </div>
     <div class="list-item">
          <a href="">Pesanan</a>
        </div>
     </div>
  </div>
  <div class="main-content">
    <div class="nav">
      <div class="left-menu">
          <h1>WEB PKK</h1>
      <Span class="judul">Dashboard</Span>
    </div>
    <div class="right-menu">
      <a href=""><img src="ikan.jpg" alt=""></a>
    </div>
  </div>
      <table border ="1">
          <td>
              <tr>no</tr>
              <tr>nama</tr>
              <tr>jenis kelamin</tr>
              <tr>alamat</tr>
              <tr>no hp</tr>
              <tr>email</tr>
              <tr>poto</tr>
          </td>
      </table>
  <div class="content">
              <?php

          foreach ($hasil as $ya){
        ?>
      <div class="list-produk">
        <img src="poto/<?= $ya["poto"];?>">
        <tr><?= $ya["nama"];?></tr>
        <tr><?= $ya["nama"];?></tr>
        <tr><?= $ya["nama"];?></tr>
        <tr><?= $ya["nama"];?></tr>
        <tr><?= $ya["nama"];?></tr>
        <tr><?= $ya["nama"];?></tr>
      </div>
      <?php
              }
      ?>
  </div>
</div>
</body>
</html>