<?php
$host = '10.6.50.211:3306';
$username = 'root';
$password = 'root';
$dbname= 'projekpkk';

$db = mysqli_connect($host,$usernama,$password,$dbname);

if($db){
    echo "database terhubung";
}else{
    echo "database error";
}