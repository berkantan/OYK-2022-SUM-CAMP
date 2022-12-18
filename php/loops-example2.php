<?php
$students = [
    [
        "name" =>   "Berkan",
        "surname" =>    "Tan",
        "number" =>    "452",
        "course" =>     "PHP",
        "is_active" => true,
    ],
    [
        "name" =>   "Uğur",
        "surname" =>    "Arıcı",
        "number" =>    "455",
        "course" =>     "PHP",
        "is_active" => true,
    ],
    [
        "name" =>   "Ege",
        "surname" =>    "Akat",
        "number" =>    "666",
        "course" =>     "Laraveş",
        "is_active" => false,
    ],
];
?>
<table border="2  " style="width: 100%; ">
    <tr>
        <th>#</th>
        <th>Adı</th>
        <th>Soyadı</th>
        <th>Sınıfı</th>
    </tr>
    <?php foreach ($students as $student) :
        if (!$student['is_active']) continue;
    ?>
        <tr>
            <th><?= $student["number"] ?></th>
            <th><?= $student["name"] ?></th>
            <th><?= $student["surname"] ?></th>
            <th><?= $student["course"] ?></th>
        </tr>
    <?php endforeach; ?>
</table>
<p>Sistemde kayıtlı toplam <?= count($students) ?> kayıtlı kullanıcı var.Aktif olmayanlar listede görüntülenmez.</p>