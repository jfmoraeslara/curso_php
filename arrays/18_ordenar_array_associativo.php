<?php

    // ordenanado por idade
    $arr = [
        'Carlos' => 18,
        'Pedro' => 30,
        'Maria' => 25,
        'Anna' => 51,
    ];

    // crescente
    asort($arr);

    print_r($arr);
    echo "<br><br>";

    // decrescente
    arsort($arr);

    print_r($arr);
    echo "<br><br>";

    // ordenando pelo nome da chave
    ksort($arr);

    print_r($arr);
    echo "<br><br>";

    krsort($arr);

    print_r($arr);
    echo "<br><br>";
       
?>