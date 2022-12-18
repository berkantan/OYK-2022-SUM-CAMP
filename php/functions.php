<?php
//php'de bazı kod bloklarını gerektiğinde çağırıp kullanabilmek adına fonksiyon olarak tanımlayabiliriz.
//fonksiyonlar n adet parametreyi kabul edip bunları kullanarak işlem yağan ve gerekirse işlemin sonucunu
//bir çıktı olarak döndüren işlevlerdir.
//bir foksiyon tanımlamak için öncelikle function anahtar kelimesini yazar
//en az bir boşluk bıraktıktan sonra fonksiyonun adı yazılır fonksiyonun adının yanına parameterlerin tanımlanacağı bir
//parantez açılıp kapatılır ardından bir süslü parantez içinde fonksiyonun yapacağı işlemler tanımlanır
//eğer fonksiyon yaptığı işlemlerin sonnda bir çıktı dönecekse return anahtar kelimesi aracılığıyla dönececği 
//değer belirlenir 
//bir foksiyon çalışırken return ifadesini görüp çıktıyı döndürdükten sonrasını işleme koymaz

function selamlar()
{
    echo    "selam:)<hr>  ";
}
//php'de bir fonksiyon tanımlandığında çağırılana kadar çalıştırılmaz
selamlar();
//tanımlanmış bir fonksiyon birden çok kez çağırılabilir
selamlar();
selamlar();
selamlar();

//fonksiyonla<rın kendi işlenişleri içerisinde dilenirse echo print gibi 
//ifadelerle ekrana çıktı üretmek mümkünse de bu tercih edilmez
//bir fonksiyon için tercih edilen davranış; dışarıya göndereceği veriyi
//return anahtar kelimesi ile döndürülür
//bu fonksiyonun döndürdüğü sonuçla ne yapılacağına fonksiyonun kullanıldığı yerde karar verilir

function adamakilliselam()
{
    return  "Selam aq <hr>";
}
$selam = adamakilliselam();
echo $selam .  "  <hr> ";
echo adamakilliselam() . "<hr>";
echo strlen(adamakilliselam()) .    "<hr>";

$ad =   "Berkan";
function isimimneaq($ad)
{
    return  "naber kanka" . $ad .   "sg";
}
//bir fonksiyonun tanımı esnasında belirtilen parametreler 
//bu parametreleri temsilen kullanılan değişkenler 
//fonksiyonun içinde haricinden yaratılıp kullanılan değişkenler
//o fonksiyonun her bir çalıştırılmasına özel bir alanda tutulur
//ve global scope dediğimiz,uygulamamızın kendi değişkenlerine karışmazlar
//yani fonksiyon dışında $ad şeklindee bir değişkenimiz varsa 
//gonksiyonda parametre olarak ya da fonksiyon içinde aynı isimli $ad şeklinde 
//bir değişken tanımlasak bir bu asşa dışarıdaki $ad değişkenine etki etmez
//fonksiyon çağrıldığında tamamen kendine özel bir etki alanı açılır 
//o çalışmaya özel değişkenler o alanda tutularak işleme sokulur
//global scope'a (hem okuma hem yazma) bakımından asla erişilmez / karışmaz 
//fonksiyon parametre olarak ne aldıysa ona ve ancak kendi içinde üretilen değişkenlere erişebilir.

//ancak bunun bir istisnası bulunu
//uyarı uyarı uyarı bu istisnayı bilin diye yazıyorum sakın kullanmıyore
//eğer fonksiyon içinde global anahtar kelimesinden sorna, global scope içinde 
//hangi değişkenlere erişim sağlamak istediğinii virgüllerle ayırarak yazarsanız
//bu değişkenleri  hem okuyabilir hem de üzerine yazabilir hale gelirsiniz
//SAKIN KULLANMAYIN
//scope'u ayrı tutul
//returnması gereken fonksiyonlar global scopetaki veriye erişebilir hale geldiğinde,öngörülmeyen sorunlara
//sebep olabilir.
//bir fonksiyon tanımı fonksiyon çağrılmadığı sürece php yorumlayıcısı tarafından okunmaz
//php yazımında bir sorunda yoksa kod yorumlayıcı tarafından hatasız görünür
//daha önceden karşılaşılmamıl bir hataya denk gelinebilir

function tatlibirfonksiyon()
{
}
echo    "burası çalışacak mı aq<hr>";
tatlibirfonksiyon();

function a()
{
    function b()
    {
        function c()
        {
            return  "aman aman nerelere geldik daha demin evdeydik";
        }
    }
}
