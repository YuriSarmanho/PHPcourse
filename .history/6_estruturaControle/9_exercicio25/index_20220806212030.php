<?php

function isHighThen100($var)
{
    if (is($var)) {
        $mult = $var * 2;

        if ($mult > 100) {
            echo "Numero $mult é maior que 100 <br>";
        }
    }else{
        echo "$var não é numérico";
    }
}


isHighThen100(20);
isHighThen100("Ola");
isHighThen100(1.3);
isHighThen100(15);