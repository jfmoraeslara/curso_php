<?php

    $idadeA = 10;
    $idadeB = 18;
    $idadeC = 30;

    $maiorIdade = 18;

    $msg = "Você é maior de idade! <br>";

    if($idadeA >= $maiorIdade) {
        echo "1 - ";
        echo $msg;
    }    

    if($idadeB >= $maiorIdade) {
        echo "2 - ";
        echo $msg;
    }

    if($idadeC >= $maiorIdade) {
        echo "3 - ";
        echo $msg;
    }    

?>