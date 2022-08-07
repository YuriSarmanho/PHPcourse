<?php

function isHighThen100($var)
{
    if (is_numeric($var)) {
        $mult = $var * 2;

        if ($mult > 100) {
            echo "Numero $mult é maior que 100 <br>";
        }
    }else{
        echo "$"
    }
}


isHighThen100(20);
isHighThen100("Ola");
isHighThen100(130);
isHighThen100(15);