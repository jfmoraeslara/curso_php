<?php

    class Cachorro {

        function latir() {
            echo "Au au <br>";
        }

        function andar($m) {
            echo "O cachorro andou $m passos <br>";            
        }
                
    }

    $viraLata = new Cachorro;
    $pastorAlemao = new Cachorro;

    $viraLata->latir();
    $viraLata->andar(10);

    echo "<br>";

    $pastorAlemao->latir();
    $pastorAlemao->andar(20);

?>