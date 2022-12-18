<?php
require_once 'data.php';
$newsId = $_GET['id'];
$new = $news[$newId];
include "header.php";
?>
<!-- enctype = ENCode TYPE -->
<form action="edit_page.php" method="POST" enctype="multipart/form-data">
    Name:
    <input type="text" name="name" value="<?= $character['name'] ?>"> <br>
    Desc:
    <textarea name="description" cols="30" rows="10"><?= $character['description'] ?></textarea> <br>
    <img src="<?= $character['image'] ?>" alt="<?= $character['name'] ?>" /> <br>
    Image:
    <input type="file" name="image"> <br>
    <br> <br>
    <input type="hidden" name="id" value="<?= $characterId ?>">
    <button type="submit">Sayfayı Düzenle</button>
</form>
<?php include "footer.php"; ?>