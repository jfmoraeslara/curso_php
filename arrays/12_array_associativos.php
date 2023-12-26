<?php

    $arr = [
        'cor' => 'vermelho',
        'forma' => 'retângular',
        'material' => 'aço',
    ];

    // nomes das chaves associativos
    extract($arr);

    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";
    
?>