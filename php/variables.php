<?php
phpinfo();
//php yorumlayıcımızın yüklü ve çalışır olduğundan emin olmak
// mevcut sürüm ve eklentileri kontrol edebilmek için phpinfo() fonksiyonunu çalıştırabiliriz.
// phpingo()
//php ile dinamik çıktılar üretmek için ihtiyaç duyacağımız temel şey;değişkenler oluşturmaktadır
//php de değişken oluşturmak çok kolaydır
//bir dolar işareti($) ardından,alfa nümerik değerler ve alt çizgi içerebilen bir isim 
//eşittir(=) ile atama ve karşısına da değişkene ataaycağımız değerin yazılmasıyla
//kolaylıkla değişken oluşturabilriz
//php yazarken her ifadenin sonuna koyduğumuz gibi bu atama ifadesi sonrasında da noktalı virgül (;) koymalıyız
//değişken isimleri rakam içerebilse bile rakan ile başlayamaz

$name = "Berkan Tan";
//Hemen hemen her programlama dilinde olduğu gibi,php'de de değişkenler farklı tiplerde veri barındırabilir
//değişkenlerde atayabileceğimiz veri tipleri;
//metin,tam sayı,ondalıklı sayı,boolean(true or false) ,dizi,null,object,resource
//veri tipleri bir programın çalışma mantığı açısından çok önemlidir
//örneğin matematiksel işlemler için sayısal veri tiplerinin kullanımı gerekir
//php varsayılan değişkenlerin tipini kısıtlamak,siz değişkene nasıl atama yaptıysanız,değişkenin tipi o olur
//string (metin) tipi
//string (metin) tipinde atama yapabilmek için,değişkenin içeriğini tırnak içine yazarız
//tek tırnal(') ya da çift tırnak (") kullanılabilir.önemli olan, nasıl açıldıysa öyle kapatılmalıdır
$isim = "Berkan Tan";
$kurs = 'php ile web programlamaya giriş';

//integer(tam sayı) tipi
// atama yaparken doğrudan, tırnaksız mırnaksız, tam sayı yazarız
//ondalık ayracı olarak nokta (.) kullanılmak zorundadır.

$kucukCocukYasi = 4.5;
//boolean (doğruluk değeri) tipi
//bir şeyin varlığı/yokluğu üzerine true/false ataması yapabileceğimiz veri tipidir.

$yakisikliMi = true;
$dersBittiMi = false;

//null (yokluk) tipi
//bir değişkeni null olarak atadığımızda, henüz bir değeri bulunmadığını söylemiş oluruz.
//null tipli bir değişken ile,içeriği boş olan bir değişken birbirinden farkılıdır.

$allahKorkusu = null;

//array (dizi) tipi
//birden çok değeri bir arada tutabilen veri tipidir.
// örneğin; aynı niteliğe sahip verileri,tek bir değişken içinde tutmayı sağlar.
//bir değişkene dizi ataması yapabilmek için,array() parantez içinde her değerini 
//virgüllerle ayırarak yazabiliriz
//bir kısa yok olarak array yazmak yerine boş köşeli parantezlerin [] içine de yazabiliriz.

$hobileri = array("konuşamk","yemek yemek","gezmek","çalışmak","şarkı söylemek");
$fobileri = ["kuşlar","iguana","timsah","yılan","ödeme gelmemesi","ay başı","vergi"];

//php'de bir dizi içinde biririnden farklı tipte elemanlar tutulabilir.

// $karma =["string" 11, 3.75, null, true, false, array ("yavru dizinin elemanı")];
// echo "kahramanımızın adı $isim.kendisi $doğumYili yılında doğmuş ve $yas yaşında ";
// php'de biz dizi içinde her tipteeleman bulundurabildiğimiziçin,başka diziler debarındırabiliriz,
// bu yöntem, tekrar eden yapılandırılmış veri oluşturmada fazlaca işimizde yarar
// örneğin bir dizi yaratalıve içinde bir öğrencinin bilgilerini tutalım
$öğrenci=['ad'=>'uğur','soyad'=>'Arıcı','no'=>'455' 'sinif'=>'php',];
         ['ad'=>'yunus','soyad'=>'Bal','no'=>'7' 'sinif'=>'php',];
         ['ad'=>'eray','soyad'=>'aydın','no'=>'null' 'sinif'=>'scala',];
         ['ad'=>'berkan','soyad'=>'tan','no'=>'543' 'sinif'=>'1-D',];
         
//bu sayede belirli bir standart oluşturmuş     "öğrenci    "tipinde verinde,birçok kaydı bir arada tutabiliriz.
//elimizdeki bir değişkenin tipinin ne olduğunu öğrenmek istiyorsak gettype($var)fonksiyonunu kullanabiliriz.

echo gettype($öğrenciler);
echo"<hr>";
echo gettype($yaş);
echo    "<hr>";

//elimizdeki bir değişkeni tipiyle beraber ekrana döküp inceleyebilmek için var_dump($var)fonksiyonunu kullanabiliriz
//burada pre html etiketini ön tanımlı tipiyle dümdüz ekrana bas demek için yaptık
echo    "<pre>";
var_dump($öğrenciler);
echo"</pre> ";

//php de eğer elimizdeki bir verinin tipini değiştirmek istiyorsak settype fonksiyonunu kullanabiliriz.

settype($yas 'dsasda');
echo    "<hr>   ";
echo gettype($yas);
echo    "<hr>";  

//binamik bir çıktı üretebilmek için php'de şartlı ifadeler çalıştırabiliriz.
//kontrolü sağlamak için şartı bir if () içine alırız,şartın sağlanması durumunda 
//çalışacak kısmı,if()'in hemen sonrasında açtığımız bir süslü parantes{} içine yazarız

if(true){
    echo    "Burada şartlı direkt true verdiğimiz için bu satır çalışacaktır";
}

//if içine kontrol için verdiğimiz ifadenin,true ya da false çıktı üretmesi gerekir.
//bunun için bazı kontrol operatörleri kullanabiliriz.
//örneğin iki sayının birbirinden büyük,küçük,büyük eşit,küçük eşit,eşit olma durumları kontrol edilebilir.

/**
 * büyükse                      >
 * küçükse                      <
 * büyük eşitse                 >=
 * küçük eşitse                 <=
 * içeriği eşitse               ==
 * içeriği eşit değilse         !=
 * içeriği ve tipi eşitse       ===
 * içeriği ve tipi eşit değilse !==
 */
$yas = 29; 
if:($yas > 18){
        "Bu kişi çoktan reşit olmuş";
} elseif ($yas == 18){
echo    "Bu kişi reşit olmuş";
elseif ($yas>= 7 and $yas < 18)
echo    "Bu kişi okul çağında";
} else {
    echo    "Bu kişi henüz reşit değil";
}

//çoklu koşulları bir arada kontrol edebilmek bir if() içinde birden fazla ifadenin birlikte kontrolü mümkündür
//bir if() içinde birden fazla ifadenin birlikte kontrolü mümkündür.
//bunun için her ifadenin true olmasını istiyorsak AND ya da && operatörlerini
//herhangi birinin true olması yetiyorsa OR ya da || operatörlerini

if(true and true) {
   //AND ile kontrol yapıldığından ikisinin de true olması gerekiyordu,ikisi de true,burası çalışır
}

if(true && false) {
    //AND ile kontrol yapıldığından ikisinin de true olması gerekiyordu, biri false ,buraso çalışmaz
}

if(true or false) {
    //OR ile kontrol yapıldığından herhangi birinin true olması gerekiyordu.biri true,burası çalışır.

}

if(false || false){
    //OR ile kotrol yapıldığından herhangi birinin true olması gerekiyordu,ikisi de false,buraso çalışmaz.
}

if(true xor false){
    //XOR ile kontrol yapıldığından biri true iken diğerinin false olması gerekir,burada da birisi true diğeri false
    //,burası çalışır.
}

if(true xor true){
    //XOR ile kontrol yapıldığından biri true iken diğerinin false olması gerekir,burada ikiside true,burası çalışmaz
}

//bir ifaddeyi birçok değerle karşılaştırmak istediğimizde swtich kullanırız.switch sonrası süslü parantes açarak 
//caselerimizi belirtilir.her case deki ifade ile başta belirlenen ifade karşılaştırılır ve eğer doğruysa ilgili
// kod bloğu break görene kadar çalışır .
//Herhangi bir case ifadesinin karşılanmaması durumunda da default içerisindeki kod bloğu çalışır.

//foreach
//iterable (bu senaryoda array) değerlerin içindeki 
//her bir eleman için bir kereuygulanacak işlemleri yazabildiğimiz döngü 
//örneğin yukarıda $kankalar dizisindeki her bir elemanı ekrana basabilmek için for döngüsü 
//içinde her bir indisin basılmasını sağladık
//bunun yerine $kankaşar dizisi içindeki her bir elemanı,sırayla bir referas değişkene atayarak üstünde 
//işlem yapmamızı sağlayan çok yakışıklı bir döngü olarak foreach'ı kullanacağız

foreach($kankalar as $kanka)
{
    echo $kanka;
    echo "<br>";
}

//foreach döngüsünde yalnızca dizi elamanının içeriğini değil,istersen elemanın indisini de bir değişkene atayabiliriz.

// php'de tek bir şarta bağlı ve şart sağlandıpı sürece sürdürülecek bir döngü tanımlamak da mümkündür
// while döngüsü tek parametre alır ve true döndüğü sürece tekrar etmeye devam eder.
// while (true) {
    echo    "sonsuz döngü<3 <br>    "
    // if (rand(1, 6) == 4) break;

//herhangi bir döngünğn içinde artık döngünün tamamen durmasını,sonraki tekrarı da yapmamasını istiyorsak 
//break komutunu kullanabiliriz.
//http stateless çalışır.
