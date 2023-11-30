<?php

    $str = "Esta é minha string";

    // Inicia no texto e percorre 5 espaços
    $minha = substr($str, 8, 5);

    echo $str . "<br>";
    echo $minha . "<br><br>";

    // inicia no texto e vai até o fim
    $str1 = "Novo teste string";
    $novaString = substr($str1, 5);

    echo $novaString . "<br><br>";

    // removendo do último indice
    $remove = "Removendo os caracteres abc";
    echo $remove . "<br>";

    $novoRemove = substr($remove, -28, -3);
    echo $novoRemove . "<br>";

?>