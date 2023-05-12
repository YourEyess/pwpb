<?php

?>
<?php
          if (isset($_POST['submit']));
                    //tampung datanya
                    $id = $_POST['id_admin'];
                    $use = $_POST['username'];
                    $pass = $_POST['password'];
                    $level = $_POST['level'];

                    //enkripsi password
                    $pw = password_hash($pass,PASSWORD_DEFAULT);

                    //proses simpan
                    mysqli_query($conn,"INSERT INTO login VALUES (NULL,'$id','$use','$pw','$pass','$level')");
                    if(mysqli_affected_rows($conn)){
                              echo "
                              <script>
                               alert('Data Tersimpan');
                               document.location.href='userlist.php';
                              </script>
                              ";
                    }
          endif 
?>  
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>User</title>
</head>
<body>
          <form action="" method="post">
                    <label for="id">Nama Admin</label>
                    <select name="id_admin" id="">
                              <option value="">Pilih User</option>


          <div class="form-control">
                    <label for="">ID Admin</label>
                    <input type="text" name="id">
          </div>          
          <div class="form-control">
                    <label for="">Username</label>
                    <input type="text" name="username">
          </div>
          <div class="form-control">
                    <label for="">Password</label>
                    <input type="password" name="password">
          </div>
          <div class="form-control">
                    <label for="">Level</label>
                    <select name="id_admin" id="">
                              <option value="">Pilih Level</option>
                              <option value="1">Super Admin</option>
                              <option value="2">Admin</option>
                     </select>
          </div>
          <div class="form-control">
                    <button type="submit" name="submit">Simpan</button>
          </div>
          </form>
</body>
</html>