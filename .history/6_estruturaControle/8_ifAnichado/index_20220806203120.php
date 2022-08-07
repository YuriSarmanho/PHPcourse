<?php
function teste($num1)
{
    if ($num1) {
        $soma = $num1 + 50;
        if ($soma > 80) {
           return "Maior que 80 <br>";
        }
        echo "Menor que 80 <br>";
    }
}


teste(50);
teste(20);
teste(10);
teste(80);
