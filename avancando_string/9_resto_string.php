<?php

    $str = "Testendo o resto da string para imprimir";

    // a partir da palavra selecionada
    $resto = strstr($str, "resto");

    echo "$resto <br>";

    // utilizando uma variável
    $s = "string";

    $resto2 = strstr($str, $s);

    echo "$resto2 <br>";

    if(strstr($str, "net") === false) {
        echo "Palavra não encontrada! <br>";
    }

?>
