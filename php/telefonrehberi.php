<?php

$rehber = [
    "Yunus" =>  "05325151112",
    "Çisem" =>  "05076664314",
    "Betül" =>  "05056105313    ",
];
?>
<h1>Rehber</h1>
<table border="2" style="width: 100%;">

    <tr>
        <th>İsim</th>
        <th>Telefon</th>
        <th>cinsiytet</th>
    </tr>
    <?php foreach ($rehber as $kisi => $telefon) :
    ?>

        <tr>
            <td><?= $kisi ?></td>
            <td><?php echo $telefon ?></td>
            <td>
                <?php
                if ($kisi === "Yunus") : ?>
                    Erkek
                <?php else : ?>
                    Kadın
                <?php endif; ?>
            </td>

        </tr>
    <?php endforeach; ?>

</table>