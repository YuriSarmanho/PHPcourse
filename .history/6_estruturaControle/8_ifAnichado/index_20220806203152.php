<?php
function teste($num1)
{
    if ($num1) {
        $soma = $num1 + 50;
        if ($soma > 80) {
            echo "Maior que 80 <br>";
        } else {
            echo "Menor que 80 <br>";
        }
    }
}

teste(50);
teste(20);
teste(10);
teste(80);
