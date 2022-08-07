<?php

function isHighThen100($var)
{
    if (is_numeric($var)) {
        $mult = $var * 2;

        if ($mult > 100) {
            echo "Numero $mult é maior que 100 <br>";
        }
    }
}


isHighThen100(20);
isHighThen100(50);
isHighThen100(130);
isHighThen100(15);