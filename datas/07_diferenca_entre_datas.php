<?php

    $dataA = new DateTime();
    $dataB = new DateTime();

    $dataB->setDate(2001, 10, 15);

    print_r($dataA);
    echo "<br>";
    print_r($dataB);
    echo "<br>";

    echo "<br> Diferença entre as datas: <br>";
    $diferenca = $dataA->diff($dataB);

    print_r($diferenca);
    echo "<br>";

    echo "<br> Diferença de dias entre as datas: <br>";
    echo $diferenca->format("%a days");
    echo "<br>";

?>