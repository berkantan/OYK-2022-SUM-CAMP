<?php
$data = file_get_contents('data.json');
$news = json_decode($data, true);
// $news = [
//     [

//         "name" =>   "LeBron James'in Gençliği ve Eğitimi   ",
//         "image" => "a.jpg",
//         "description" => "James, 30 Aralık 1984 tarihinde Akron, Ohio'da dünyaya geldi. Annesi Gloria Marie James onu dünyaya getirdiğinde
//         16
//         yaşındaydı. Annesinin iş arayışı nedeniyle birlikte Akron şehrinde sürekli bir mahalleden başka bir mahalleye
//         taşınmak zorunda kaldılar.Annesi Gloria, LeBron'un boş zamanlarında vakit geçirmesi için futbol oynamasını
//         istiyordu. Ve daha sonra onun yerel gençlik futbol antrenörü Frank Walkerza'nın takımına kayıt yaptırdı. 9
//         yaşındayken
//         ise basketbol ile tanıştı.
//         Çocukken basketbolu takım olarak ilk Amatör Atletizm Birliği (AAU)'ya bağlı Kuzeydoğu Ohio Şut Starları
//         takımında
//         oynamaya başladı. LeBron Sian Cotton, Dru Joyce III ve Willie McGee tarafından yönetilen bu takımdaki
//         arkadaşları ile
//         beraber eyalette yerel ve ulusal düzeyde birçok başarı kazandı. Okul sona erdikten sonra kendilerini Fab Four
//         olarak tanımlayan James ve üç arkadaşı hayatları boyunca ayrılmayacaklarına dair söz verdiler. Lise kariyeri
//         için bir
//         sürü okuldan teklif alsa da St Vincent-St. Mary Lisesi'nde okumayı kabul etti   "
//     ],
//     [
//         "name" =>   " LeBron James'in Lise Kariyeri  ",
//         "image" => "b.jpg",
//         "description" =>    "Lise kariyeri için St Vincent-St. Mary Lisesi'ni seçen James, kısa sürede okulun üniversite basketbol takımına
//         yükseldi.
//         Lisedeki ilk yılında maç başına 21 sayı ve 6 ribaund ortalamaları ile oynadı. Takımıysa sezonu 27-0'lık bir
//         dereceyle
//         noktalayarak İrlandalı Savaş Bölümü III'ü yani eyalet şampiyonluğunu kazandı.Lisedeki ikinci sezonunda maç
//         başına
//         25,2 sayı, 7,2 ribaund, 5,8 asist ve 3,8 top çalma ortalamaları ile oynadı. Ayrıca bu sezonda James'in
//         takımıyla
//         oynadığı bazı maçlarda Rodos Arena'ya bazı NBA takipçileri ve NBA scoutları onu izlemek için geldiler.[5][11]
//         Takımı bu
//         yılı ise 26-1'lik derece ile noktalayarak İrlandalı Bölümünü şampiyon olarak noktaladı. Onun lisede ikinci
//         yılındaki
//         gösterdiği performansıyla Ohio Mr. Basketbol ve ABD Yılın En İyi Liseliler Beşi'ne seçildi, ayrıca lisedeki
//         ikinci
//         yılında Mr. Basketbol seçilen tarihteki ilk oyuncu oldu."

//     ],
//     [
//         "name" =>   " LeBron James'in Profesyönel Kariyeri ",
//         "image" =>    "c.jpg",
//         "description" =>    "Çaylak sezonu (2003-04)

//         James ,Cavaliers formasıyla Wizards maçında içeriye penetre ederken. (Kasım 2006)
//         James 2003 NBA Seçmeleri'nde Cleveland Cavaliers tarafından birinci sıradan seçildi. NBA'deki ilk resmi
//         maçına
//         Sacramento Kings karşısında çıktı ve maçı 25 sayı, 9 asist, 6 ribaund ve 4 top çalma ile oynadı. Ayrıca NBA
//         tarihinde
//         liseden draft edilen bir çaylak oyuncu için ilk maçında en çok sayı atan oyuncu oldu. James, bu sezon ayrıca
//         tarihte
//         en genç 1000 sayı barajına ulaşan oyuncu oldu. New Jersey Nets ile oynanan karşılaşmada attığı 41 sayı ile
//         tarihte
//         en genç bir maçta 40 sayı üzerine çıkan oyuncu oldu. James, sezon sonunda Carmelo Anthony ile çekiştiği
//         Yılın
//         Çaylağı ödülünü kazandı ve bunu gerçekleştiren ilk Cavaliers'li basketbolcu oldu. Ayrıca çaylak sezonunda
//         20.9
//         sayı,5.9 asist ve 5.5 ribaund ortalamaları tutturarak 20 sayı, 5 ribaunt ve 5 asist istatistiklerini çaylak
//         yılında
//         Michael Jordan ve Oscar Robertson'dan sonra yapan tarihteki üçüncü oyuncu oldu. Takımıysa sezonu 35-47'lik
//         dereceyle
//         kapatarak önceki yıla göre on sekiz oyun daha fazla kazansa da play-off yapamadan noktaladı.
// "

//     ],
// ];
// file_put_contents('data.json', json_encode($news));
