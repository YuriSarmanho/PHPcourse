<?php
$textoHTML = "<p>Testando parágrafo.</p><div>Uma div</div><p>Outro parágrafo</p>";


echo $textoHTML;

$salvarBancoDeDados = strip_tags($textoHTML);

echo $salvarBancoDeDados;