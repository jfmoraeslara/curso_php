<?php

    // checando se o nome está presente
    if($_GET['nome']) {
         $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    } else {
        $nome = "Padrão";
        $idade = "Padrão";
    }
    
?>

<h2>O seu nome é <?= $nome ?>, e você tem <?= $idade?> anos</h2>