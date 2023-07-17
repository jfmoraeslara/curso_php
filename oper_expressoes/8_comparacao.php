<?php

/*  igualdade: ==
    idêntico: ===
    diferença: !=
    não idêntico: !==
    maior: >
    menor: <
    maior menor ou igual: <= e >=
*/

    // igualdade 1 verdadeiro
    echo "Igualdade";
    echo 5 == 4, "<br>"; // falso;
    echo 3 == 3, "<br>"; // verdadeiro
    echo 3 == "3", "<br>"; // verdadeiro
    echo "João" == "João", "<br>"; // verdadeiro
    echo "João" == "joão", "<br>"; // falso;   

    // idêntico, analisando os tipos
    echo "Idêntico";
    echo 5 === "5", "<br>";
    echo 3 === 3, "<br><br>";

    // não idêntico
    echo "Não idêntico";
    echo 5 !== 5, "<br>";
    echo 3 !== "3", "<br><br>";

    // diferença
    echo "Diferença";
    echo 5 != 5, "<br>";
    echo 5 != "5", "<br>";
    echo 5 != 3, "<br>"; // verdadeiro
    echo "João" != "joão", "<br><br>"; // verdadeiro

        

?>