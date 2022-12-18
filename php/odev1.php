<?php
$isim =  "berkan";
$yas =   "18";
$konum = "bolu";
$friends =   "Damla ve Şevval";



echo    "Merhaba ben $isim.Bu sene $yas ımı bitircem. Bugün Metehan'la $konum dayız.  ";
if ($yas > 18) {
    //18 yaşının üstünde ise cesettir
    echo    "$yas olduğun için bara girebilirsin ";
} elseif ($yas == 18) {
    echo   "$yas .Bu kişi 18 yaşında";
} else {
    echo   "$yas yaşıdasın sen daha çok küçüksün bu iş için   ";
}

switch ($isim) {
    case   "berkan";
        echo    "bundan sonra o ali ";
        break;
    case "sevval";
        echo        "o bir kadın";
        break;
    case "damla";
        echo    "pelinsu";
        break;
    default:
        echo    "oyle birisi bulunamamaktadır";
        break;
}
echo "<br/>";
$kankalar = ["emirhan",  "ibrahim",  "arda", "esra"];
for ($i = 0; $i <= 3; $i++) {
    echo  $kankalar[$i];
    echo    "<br/>";
}

for ($i = 3; $i >= 0; $i--) {
    echo  $kankalar[$i];
    echo    "<br/>";
}
foreach ($kankalar as $kanka) {
    echo $kanka;
    echo    "<br/>   ";
}

$ogrenci =   ["ad" =>    "Berkan",   "soyad" =>  "Tan",  "no" => 455];


foreach ($ogrenci as $key => $value) {
    echo $key .  ":" . $value;
    echo "<br/>";
}
$denemesayisi = 0;
do {
    $zar = rand(1, 6);
    $denemesayisi++;
} while ($zar !== 3);
echo $denemesayisi .   " kere denedikten sonra zar 3 geldi ";
