<?php
    // Na variável por referência os valores estão interligados um com o outro

    $x = 10;
    $y =& $x;

    echo $x;
    echo "<br>";
    echo $y;
    echo "<br><br>";

    $y = 15;

    echo "Atribuições após a referência 1";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br><br>";

    $x = 20;

    echo "Atribuições após a referência 2";
    echo "<br>";
    echo $x;
    echo "<br>";
    echo $y;
    echo "<br><br>";

    $nome = "João";
    $nome2 =& $nome;

    echo "Atribuições após a referência nome";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br><br>";

    $nome2 = "Pedro";

    echo "Atribuições após a referência nome 1";
    echo "<br>";
    echo $nome;
    echo "<br>";
    echo $nome2;
    echo "<br><br>";
    
?>