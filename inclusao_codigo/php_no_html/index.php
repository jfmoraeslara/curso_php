<?php

    include_once "backend.php";

?>

<h1>Seja bem vindo ao nosso site</h1>
<p><?= $nome; ?> veja as nossa ofertas</p>

<h2>Confira nossos principais produtos:</h2>
<ul>
    <?php foreach($produtos as $produtos): ?>
        <li><?= $produtos; ?></li>      
    <?php endforeach; ?>
</ul>