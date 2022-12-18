<?php
require_once  'data.php';

$name = $_POST["name"];
$description = $_POST["description"];
$id = $_POST['id'];
$oldImage = $characters[$id]['image'];

// Eğer dosya seçildiyse...
if (isset($_FILES['image'])) {
    // Yeni yüklenen dosyanın bilgilerini al
    $image = $_FILES['image'];

    // Eskiden eklenmiş bir dosya varsa...
    if ($oldImage) {
        // Eskisini sil
        unlink($oldImage);
    }
    $extension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    $fileName = uniqid() . '.' . $extension;
    // Yenisini yükle
    move_uploaded_file(
        $image['tmp_name'],
        __DIR__ . "/uploads/" . $fileName
    );

    // Yenisinin yolunu belirt
    $image = 'uploads/' . $fileName;
} else {
    $image = $news[$id]['image'];
}
// $data = file_get_contents('data.json');
// $characters = json_decode($data, true);

$news[$id] = [
    "name" => $name,
    "description" => $description,
    "image" => $image,

];
$json_data = json_encode($characters, JSON_PRETTY_PRINT);
$result = file_put_contents('data.json', $json_data);

header("Location:detail.php?id=" . $id);
