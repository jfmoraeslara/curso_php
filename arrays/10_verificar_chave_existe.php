<?php

    // verificar se uma chave existe em uma array
    $arr = [
        'nome' => 'João',
        'idade' => 42
    ];

    echo "Método key_exists <br>";
    if(array_key_exists("nome", $arr)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if(array_key_exists("profissão", $arr)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }
    echo "<br>";

    echo "Método isset <br>";
    if(isset($arr["nome"])) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

    if(array_key_exists("profissão", $arr)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }
    echo "<br>";
    
    echo "Isset usando uma variável <br>";
    $x = 10;

    if(isset($x)) {
        echo "A chave existe <br>";
    } else {
        echo "A chave não existe <br>";
    }

?>