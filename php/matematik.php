<?php
// +$i herhangi bir değeri matematiksel işleme hazırlar (int/float).
// -$i herhangi bir değerin tersini almamızı sağlar.
// 1 + 2 iki değerin toplanmasını sağlar.
// 1-2 iki değerin çıkarılmasını sağlar
// 1*2 iki değeri çarpar e sonucu döndürür
// 1 / 2 iki değeri böler.
// 1 % 2 iki değeri böler ve kalanını döndürür.
// 1 ** 6 1^6 işlemini yapmış olur

$x = 1;
$y = 2;

$x = $x + $y;
$x += $y;
// hem operatörü uygulamak hem de atama yapmak istiyorsak operatörün sonunda 
// = kullanabiliriz.
$x++; //$x'i ilgili yerde kullan ve daha sonra 1 arttırır.
++$x; //$x'ibir arttırır ve ilgili yerde kullan
$x--; //$x'i ilgili yerde kullan ve daha sonra 1 azalt
++$x; //$x'i bir azalt ve ilgili yerde kullan

$toplam = 1 + $x++;
// eşleniği;
// $toplam = 1 + 1(x!in arttırılmadan önceki değeri)
// $x +=1;

// 6
// 0110
// & iki değerin bitlerine VE işlemi uygular ve sonucu dönüşdürür.
// | iki değerin bitlerinde VEYA işlemini uygular ve sonucu dönüşdürür.
// >> bir değerin bitlerini belirtilen miktarda sağa kaydırır.
// << bir değerin bitlerini belirtilen miktardasola kaydırır.
// xor bir değerin bitlerine XOR işlemini uygular ve sonucu dönüştürür.

$sonuc = 6 & 4;
// 6 = 0110
// 4 = 0100
//   = &&&&
// 4 = 0100
//php'deki dahili fonksiyonları (aray_sum ve count) kullanmadan
//tamamı sayısal veriden oluşan bir dizideki elemanların ortalamasını alalım.
