<?php
session_start();
if(!isset($_SESSION["login"])){
    header("location: login.php"); exit;
}
require 'function.php';
$adm= query("SELECT * FROM Admin_list");
?>
<?php
include('head.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminadd.css">
    <title></title>
    meta
</head>
<body>
    <a href="adminadd.php" target="_blank"><button class="button">Tambah</button></a>
    <div>
        <table class="tabel">
            <h6>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jk</th>
                    <th>No hp</th>
                    <th>Email</th>
                    <th>Foto</th>
                    <th>Aksi</th>
                </tr>

                <?php foreach($adm as $row): ?>
                    <tr>
                        <td><?= $row['no'];?></td>
                        <td><?= $row['nama'];?></td>
                        <td><?= $row['jk'];?></td>
                        <td><?= $row['alamat'];?></td>
                        <td><?= $row['nohp'];?></td>
                        <td><?= $row['email'];?></td>
                        <td> <img class="foto" src="img/<?= $row['foto']; ?>"> </td>
                        <td>
                            <a herf="ubah.php?no=<?= $row['no'];?>">Edit</a>
                            <a herf="hapus.php?no=<?= $row['no'];?>">Delete</a>
                </td>
                </tr>
                <?php endforeach;?>
                </h6>
                </table>
</body>
</html>