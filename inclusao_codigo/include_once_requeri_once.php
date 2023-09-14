<?php

    // Include e require se comnunicam e adicionar uma única vez o arquivo

    // include_once
    include_once "teste_once.php";
    include_once "teste_once.php";

    // require_once
    echo "Testando require! <br>";
    require "teste_once.php";
    require "teste_once.php";
    

?>

<p>Testando código!</p>