<?php

    // mais utilizado para autenticação de acesso ao banco de dados
    session_start();

    // mostrando o acesso ao session
    print_r($_SESSION);

    $_SESSION['nome'] = "João";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Olá Session</h1>
</body>
</html>