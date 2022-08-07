<?php
$veloMax = 40;

function radar($nome, $velocidade,$veloMax)
{
    if ($velocidade < $veloMax) {
        echo "$nome vc está na velocidade correta <br>";
    } else if ($velocidade == $veloMax) {
        echo "Cuidado $nome, vc está quase acima da velocidade <br>";
    } else {
        echo "$nome, vc recebeu uma multa por excesso de velocidade <br>";
    }
}

radar("Yuri", 60);
radar("Renata", 30);
radar("Alyne", 40);