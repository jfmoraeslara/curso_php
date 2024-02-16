<?php

    // hora, min, seg, mês, dia, ano
    $dataNascimento = mktime(02, 12, 33, 02, 05, 1990);
    echo $dataNascimento . "<br>";

    $dataNascimentoFormatado = date("d/m/Y", $dataNascimento);
    echo $dataNascimentoFormatado . "<br>";

?>