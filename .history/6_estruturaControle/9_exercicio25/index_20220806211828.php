<?php

function isHighThen100($var)
{
    if (is_numeric($var)) {
        $mult = $var * 2;

        if ($mult > 100) {
            echo "Numero $mult é maior que 100";
        }
    }
}


isHighThen100(20)