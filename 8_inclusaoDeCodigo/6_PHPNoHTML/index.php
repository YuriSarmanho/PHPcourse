<?php
include_once "backend.php";
?>

<h1>Seja bem vindo ao nosso site</h1>
<p><?= $nome ?> veja as nossas ofertas</p>

<h1>Confira nossos principais produtos:</h1>
<ul>
    <?php foreach ($produtos as $produto) : ?>
        <li><?= $produto ?></li>
    <?php endforeach; ?>
</ul>