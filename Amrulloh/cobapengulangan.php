<?php
//for
$data1 = ['Amrulloh<br>','16<br>','Indhiang<br>','Main Game<br>','Ultramen<p>'];
for ($i = 0; $i < count($data1); $i++) {
echo $data1[$i];
}
//while
$data2 = ['Amrulloh<br>','16<br>','Indhiang<br>','Main Game<br>','Ultramen<p>'];
$i1 = 0;
while ($i1 < count($data2)) {
echo $data2[$i1];
$i1++;
}
//do while
$data3 = ['Amrulloh<br>','16<br>','Indhiang<br>','Main Game<br>','Ultramen<p>'];
$i2 = 0;
do {
  echo $data3[$i2];
  $i2++;
} while($i2 < count($data3));
//foreach = khusus untuk array
$data4 = ['Amrulloh<br>','16<br>','Indhiang<br>','Main Game<br>','Ultramen<p>'];
foreach ($data4 as $d) {
  echo $d;
}
?>