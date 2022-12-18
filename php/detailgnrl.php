<?php
require_once    "data.php";
$newsId = $_GET['id'];
$newsitem = $news[$newsId];
$title = $newsitem['name'] .   "LeBron James'in Hayatı";
include "header.php";
?>
<h1><?= $newsitem['name'] ?></h1>
<img src="<?= $newsitem['image'] ?>" height="250" alt="<?= $newsitem['name'] ?>">
<p>
    <?= $newsitem['description'] ?>
</p>
<hr />
<a href="LeBron James.php">Geri Dön</a>
<a href="delete.php?id=<?= $_GET['id'] ?>">SİL</a>
<?php include   "footer.php";
?>