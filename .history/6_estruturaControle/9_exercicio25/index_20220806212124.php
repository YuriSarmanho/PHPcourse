<?php

function isHighThen100($var)
{
    if (is_int($var) || is_float($var)) {
        $mult = $var * 2;
        echo "entrou"
        if ($mult > 100) {
            echo "Numero $mult é maior que 100 <br>";
        }
    }else{
        echo "$var não é numérico";
    }
}


isHighThen100(50);
isHighThen100("Ola");
isHighThen100(1.3);
isHighThen100(15);