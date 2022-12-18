<?php
$name = $_POST["name"];
$description = $_POST["description"];
$image = $_POST["image"];
$extention = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
$filename = uniqid() . '.' . $extension;
$uploadedFilePath = $_FILES['image']['tmp_name'];
$filename = $_FILES['image']['tmp_name'];
move_uploaded_file(
    $uploadedFilePath,
    __DIR__ .   "/uploads/" . $filename
);
//$data = file_get_contents('data.json');
//$news = json_decode($data, true);
require_once    'data.php';
$news[] = [
    "name" => $name,
    "description" => $description,
    "image" => $image
];
$json_data = json_encode($news, JSON_PRETTY_PRINT);
$results = file_put_contents('data.json', $json_data);
$new_item_index = count($news) - 1;

header("Location:detail.php?id=" . $new_item_index);
