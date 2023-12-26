<?php

    $arr = [5, 3, 8, 2, 4, 10, 9, 7, 1, 6];

    sort($arr);

    echo "Crescente <br>";
    print_r($arr);
    echo "<br><br>";

    echo "Decrescente <br>";
    rsort($arr);
    
    print_r($arr);
    echo "<br><br>";

    echo "Estados <br>";
    $estados = ['São Paulo', 'Rio de janeiro', 'Paraná', 'Minas Gerais', 'Mato Grosso'];

    sort($estados);

    print_r($estados);
    echo "<br>";

?>