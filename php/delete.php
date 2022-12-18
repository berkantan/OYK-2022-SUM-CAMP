<?php
require_once    "data.php";
$id = $_GET['id'];
$image = $characters[$id]['image'];
unlink($image);
unset($image);
unset($news[$id]);
$json_data = json_encode($news, JSON_PRETTY_PRINT);
$result = file_put_contents('data.json', $json_data);
header("Location:LeBron James.php");
