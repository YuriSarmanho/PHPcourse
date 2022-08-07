<?php
function teste($num1)
{
    if ($num1) {
        $soma = $num1 + 50;
        if ($soma > 80) {
            echo "Maior que 80 <br>";
        }
        echo "Menor que 80";
    }
}


teste(50);
teste(50);
teste(50);
teste(50);
