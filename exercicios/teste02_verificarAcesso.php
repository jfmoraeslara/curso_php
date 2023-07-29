<?php

    function verificarAcesso($idade, $codigo) {
        $x = 18;
        $y = 101;

        if($idade >= $x && $codigo === $y) {
            echo "Acesso autorizado! <br>";
            return;

        } else {
            echo "Acesso negado! <br>";
            return;
        }
    }

    verificarAcesso(15, 101);
    verificarAcesso(18, 101);
    verificarAcesso(15, 110);

?>