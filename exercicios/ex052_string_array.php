<?php

    $str = "carro - navio - helicóptero - barco - jangada";

    $arr = explode(" - ", $str);

    print_r($arr);
    echo "<br><br>";

    //utilizando o for para lista
    for($i=0; $i < count($arr); $i++) {
        echo "Item: $arr[$i] <br>";
    }

?>