<?php
$assosiatif = ['nama'=>'Amrulloh<br>',
'umur'=> '16<br>',
'alamat'=>'Indhiang<br>'];
echo 'biodata si poke<br>';
echo '<p>Nama = '.$assosiatif ['nama'];
echo 'Umur = '.$assosiatif ['umur'];
echo 'Alamat = '.$assosiatif ['alamat'];

//contoh
$nama = array(
        1=>"Andri",
        2=>"Joko",
        3=>"Sukma",
        4=>"Rina",
        5=>"Sari");
 
foreach ($nama as $kunci =>$isi)
{
   echo "Urutan ke-$kunci adalah $isi";
   echo "<br />";
}
?>