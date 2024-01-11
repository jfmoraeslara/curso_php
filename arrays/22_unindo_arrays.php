<?php

    $arr1 = [5, 10, 15];
    $arr2 = [20, 25, 30, 35, 40];
    $arr3 = [45, 50, 55, 60, 65, 70, 75];
    $arr4 = ["João", "Maria", "José"];

    $arrMerge = array_merge($arr1, $arr2, $arr3, $arr4);

    print_r($arrMerge);
    echo "<br>";
?>

    <h2>Mostrando lista: </h2>
    <ol>
        <?php foreach($arrMerge as $valor): ?>
            <li><?= $valor?></li>
        <?php endforeach; ?>
    </ol>
