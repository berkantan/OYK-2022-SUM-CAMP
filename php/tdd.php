<?php
//tdd
//uygulamanızda ihtiyaç duyacağınız işlemlerin nasıl çalışacağına dair bir fikirle örneğin belli bir işlemi yapmak 
//için hangi parametreleri alacak hangi isimde bir fonksiyonyazacağınız fikriyle
//o fonksiyona sabit bir şekilde verdiğiniz girdiyi yine snucunu bildiğiniz ve sabit bir şekilde yazdığınız 
//bir çıktı ile fonksiyonun sonucunu karşılaştıracak testleri kod olarak yazarız.
//php unit ve pest...

function avg($array)
{
    $sum =   0;
    $count = 1;
    foreach ($array as $item) {
        $sum += $item;
        $count++;
    }
}
$numbers = [1, 2, 3,];
echo avg($numbers);
echo    "<hr>";
if (avg([1, 2, 3]) === 2) {

    echo    "avg() fonksiyonu beklendiği şekilde çalışıyor";
} else {
    echo   "avg() fonksiyonu beklendiği şekilde çalışmıyor. 2 sonucu üretmesi gerekirken şunu üretti:" . avg([1, 2, 3]);
}
