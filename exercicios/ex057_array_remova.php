<?php

    $arr = ["batata", "maçã", "pera", "feijão", "arroz"];

    $removidos = array_splice($arr, 2, 2);

    print_r($arr);
    echo "<br>";

    echo "Removidos: <br>";
    print_r($removidos);

    ?>