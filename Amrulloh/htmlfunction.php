<?php
 include('function.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar function</title>
    </head>
    <body>
<?= cuyy(); ?>
<hr>
<h1>Function</h1>
<hr>
<table border="1">
    <tr>
        <td>Nama</td>
        <td>Umur</td>
        <td>Jurusan</td>
        <td>Alamat</td>
    </tr>
<?php
foreach ($nama as $cuyy) : ?>
    <tr>
        <td> <?= $cuyy["nama"];?></td>
        <td> <?= $cuyy["umur"];?></td>
        <td> <?= $cuyy["jurusan"];?></td>
        <td><?= $cuyy["alamat"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<button><a href = "cobadate.php"> Date</a></button>
    </body>
</html>