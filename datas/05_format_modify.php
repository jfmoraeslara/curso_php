<?php

    // data atual
    $data = new DateTime();

    echo $data->format("d/m/y") . "<br>";

    echo $data->format('D - M - Y') . "<br>";

    // data modificado mais 5 dias
    $data->modify("+5 days");
    echo $data->format("d/m/y") . "<br>";

    // 5 dias + 2 dias
    $data->modify("+2 days");
    echo $data->format("d/m/y") . "<br>";

    // 7 dias - 2 dias
    $data->modify("-2 days");
    echo $data->format("d/m/y") . "<br>";

?>