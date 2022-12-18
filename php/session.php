<?php
// web sitesi üstünde devam eden oturumu takip edebilmek için
// PHPdeki session özelliğinden faydalanabiliriz
//session_start();ile session başlatmayı ve varsa kullanmayı belirtiriz
//bu fonksiyon öncelikle ,aktif HTTP talebi içinde daha önce oluşturulmuş
//bir session 'ın anahtarının olup olmadığına bakar
//yoksa yeni bir tane oluşturur,ve sonraki HTTP taleplerinde kendisine geri gelebilmesi için bu oturum anahtarını COOKIE olarak geri gönderir
//artık sessin_start(); yazdğımız her yerde,php bu opturuma özel
//oluşturulan depoun içini açıp, $_SESSION dizisi içineekler 
//aktif bir oturum varken, $_SESSION di

//kullancıı girişi veri saklama kısmı...
//SQL ve PDO incele
