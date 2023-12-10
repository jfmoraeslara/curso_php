<?php

    $arr = ["Maçã", "Pera", "Banana", "Morango"];

    // separador
    $str = implode(", ", $arr);

    echo "$str <br><br>";

    $arr2 = ["Avião", "Tanque", "Navio", "Jipe"];

    $str2 = implode(" - ", $arr2);

    echo "$str2 <br>";

?>