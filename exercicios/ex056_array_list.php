<?php

    $carro = ["Jaguar", 3.0, "azul", 18, "Teto solar", "automático"];

    print_r($carro);
    echo "<br><br>";

    list($marca, $potencia, $cor, $aro, $util, $cambio) = $carro;

    echo "Lista de carro: <br>";
    echo "$marca <br>";
    echo "$potencia <br>";
    echo "$cor <br>";
    echo "$aro <br>";
    echo "$util <br>";
    echo "$cambio <br>";

?>