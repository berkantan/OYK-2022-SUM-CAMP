<?php
$message = null;
$users = [
    "yunusemre" =>  "sevgi",
    "erayaydin" => "321321321"

];
if (
    isset($_POST["username"]) &&
    isset($_POST["password"])
) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (
        isset($users[$username]) &&
        $users[$username] == $password

    ) {
        $message =  "BAŞARILI";
    } else {
        $message = "KULLANICI ADI YA DA PAROLA YANLIŞ";
    }
} else {
    $message = "LÜTFEN GEREKLÜ BİLGİLERİ GÖNDERİN";
}
$title = "LOGIN";
?>
<form method="POST">
    Username:<input type="text" name="username">
    Password: <input type="password" name="password">
    <br> <br>
    <button type="submit ">Giriş Yap </button>

</form>