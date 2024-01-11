<?php

    $arr = [
        'João' => 100,
        'Maria' => 80,
        'Luiz' => 50,
        'José' => 200,
        'Priscilla' => 75,
        'Pedro' => 35,
        'Matheus' => 55
    ];

    asort($arr);
    
    $arr2 = [
        'João' => 100,
        'Maria' => 80,
        'Luiz' => 50,
        'José' => 200,
        'Priscilla' => 75,
        'Pedro' => 35,
        'Matheus' => 55
    ];

    ksort($arr2);

?>

<h1>Ordenando por valor: </h1>
<ol>
    <?php foreach($arr as $pontuacao => $nome): ?>
        <li><?= $nome ?> -> <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>
</ol>

<h1>Ordenando por nome: </h1>
<ol>
    <?php foreach($arr2 as $nome => $pontuacao): ?>
        <li><?= $nome ?> -> <?= $pontuacao ?> pontos</li>
    <?php endforeach; ?>
</ol>  

