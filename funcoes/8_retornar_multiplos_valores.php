<?php

    function alteraDados($nome, $idade) {
        $nome = "Sr(a). $nome";
        $idade = "$idade anos";

        return [$nome, $idade];
    }

    $dados = alteraDados("João", 31);

    print_r($dados);

    echo "<br>";

    echo "Olá $dados[0], você tem $dados[1].";

?>