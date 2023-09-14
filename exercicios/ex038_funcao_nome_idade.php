<?php

    function nomeIdade($nome, $idade) {
        

    if(is_int($idade)) {
        echo "Nome: $nome, idade $idade anos <br>";
     } else {
         echo "Erro idade, por favor, passe um número inteiro! <br>";
     }

    }

    nomeIdade("João", 30);
    nomeIdade("Paula", "quarenta");
    nomeIdade("Carlos", 25);

?>