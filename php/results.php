<?php

echo    "<pre>";
var_dump($_POST);
echo    "</pre>";
$isim = $_POST["name"];
$yas = $_POST["years"];
$konum = $_POST["location"];
echo    "Merhaba ben $isim.Bu sene $yas ımı bitircem. Bugün Metehan'la $konum dayız.  ";
