<?php

function isHighThen100($var)
{
    if (is_int($var) || is_float($var)) {
        $mult = $var * 2;
        echo $mult;
        if ($mult > 100) {
            echo "Numero $mult é maior que 100 <br>";
        }else{
            echo "O número $mult n é maior que 100 "
        }
    }else{
        echo "$var não é numérico <br>";
    }
}


isHighThen100(50);
isHighThen100("Ola");
isHighThen100(1.3);
isHighThen100(15);