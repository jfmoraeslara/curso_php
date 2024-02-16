<?php

    $data = new DateTime();

    echo "Fuso Europeu - Berlin <br>";
    print_r($data);
    echo "<br><br>";

    date_default_timezone_set("America/Sao_Paulo");

    $data = new DateTime();

    echo "Fuso São Paulo <br>";
    print_r($data);
    echo "<br>";
    
?>