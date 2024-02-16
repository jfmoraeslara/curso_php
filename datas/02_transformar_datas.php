<?php

    $cincoDias = strtotime("5 days");
    echo "Referência 5 dias data base php <br>";
    echo $cincoDias . "<br>";
    echo "Referência 10 dias data base php <br>";
    $dezDias = strtotime("10 days");
    echo $dezDias . "<br><br>";

    $dataAtual = date("d/m/y");
    echo $dataAtual . "<br>";
    $dataAtualMais5Dias = date("d/m/y", $cincoDias);
    echo "Data atual mais 5 dias: " . $dataAtualMais5Dias . "<br>";

    $dataAtualMais10Dias = date("d/m/y", $dezDias);
    echo "Data atual mais 10 dias: " . $dataAtualMais10Dias . "<br>";

?>