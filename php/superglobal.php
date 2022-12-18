<?php
//php de dinamik bir çıktı üretebilmek için özellikle http talebi ile gelen 
//ve mevcut php yorumlayıcısının üzerinde çalıştığı sunucunun bilgilerini
//içeren veriler bazı ön tanımlı değişkelere atanız, ve biz uygulama geliştirirken
//kullanıma sunulur.

//örneğin; http talebi içinden okunan adres ve bu adres içinde gönderilen 
//dinamik parametreler (query string) php de $_GET isimli bir değişkene atanız

//bu durumda, detay.php?sira=2 şeklinde bir ziyaret yapıldığnda
//$?GET dizisi içinde indisi    "sira       " değeri ise 2 olan bir eleman bulunur

//arka planda bu adres verisi parçalanır , ve dizinin içine doldurulur.
//sanki bunu biz gözle okuyup şöyle bir kod yazmışız gibi;
//$_GET = [ "sira   " =>    "2"];

//$GLOBALS -> global 
