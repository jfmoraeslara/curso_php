<?php

    $pessoa = ["João", 40, "Estudante", "Masc"];

    print_r($pessoa);
    echo "<br><br>";

    echo "Transformando array em lista: <br>";
    list($nome, $idade, $profissao, $sexo) = $pessoa;

    echo "$nome <br>";
    echo "$idade <br>";
    echo "$profissao <br>";
    echo "$sexo <br>";

?>