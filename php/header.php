<!DOCTYPE html>
<html>


<head>

    <meta charset="utf-8">
    <title>LeBron James'in Hayatı</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav>
            <?php foreach ($news as $key => $item) : ?>
                <a href="detailgnrl.php?id=<?= $key ?>"><?= $item['name'] ?></a>
            <?php endforeach;  ?>


        </nav>

    </header>
    <main class="container">