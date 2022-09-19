<?php
$data = ['aldi','zea','akbar','rosi'];

function calcun(){
    $a = 10 ;
    $b = 5 ;
    $c = "penjumlahan $a + $b = ".($a+$b);
    return $c;
}
    $nama = [
        ["nama" => "Aldi Rudiansyah",
        "alamat" => "kp.Bojongnangka",
        "ttl" => "04-08-2005",
        "foto" => "cok.jpeg"
      ],
      [
        "nama" => "Akbar Syam Al-Ghamar",
        "alamat" => "Lembur Warung",
        "ttl" => "27-07-2006",
        "foto" => "cok.jpeg"
      ],
      [
        "nama" => "Zea Zalgya Putra Pratama HAQ",
        "alamat" => "Cimerak",
        "ttl" => "24-05-2005",
        "foto" => "cok.jpeg"
       ],
        [
        "nama" => "Rosi Nopitasari",
        "alamat" => "Pelang",
        "ttl" => "25-08-2006",
        "foto" => "cok.jpeg"
        ]
        ];
        $nama_produk = [
            ["nama_p" =>"Bakso",
            "harga" => "15.000",
            "stok" => "100",
            "poto" => "bakso.jpg"
          ],
            ["nama_p" =>"Seblak",
            "harga" => "12.000",
            "stok" => "100",
            "poto" => "seblak.jpg"
          ],
            ["nama_p" =>"Ice Cream",
            "harga" => "5.000",
            "stok" => "100",
            "poto" => "ice_cream.jpg"
          ],
            ["nama_p" =>"Mie Samyang",
            "harga" => "25.000",
            "stok" => "100",
            "poto" => "mie.jpg"
          ],
            ["nama_p" =>"Usus Crispy",
             "harga" => "3.000",
             "stok" => "100",
             "poto" => "usus.jpg"
          ],
    ];
function aldi(){
    echo "Saya Aldi<br>";
}
function tanggal($nilai){
    echo $nilai."<br>";
}
function perkalian($a,$b){
    $c = $a * $b ;
    echo "Contoh Pemanggilan Perkalian Function : $a x $b = ".$c;
}

?>