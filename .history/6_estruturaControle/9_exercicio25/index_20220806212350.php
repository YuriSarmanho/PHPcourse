<?php

function isHighThen100($var)
{
    if (is_int($var) || is_float($var)) {
        $mult = $var * 2;
        // echo $mult;
        if ($mult > 100) {
            echo "Numero $mult é maior que 100 <br>";
        }else{
            echo "O número $mult n é maior que 100 <br>";
        }
    }else{
        echo "'$var' não é numérico <br>";
    }
}


isHighThen100(60);
isHighThen100("Ola");
isHighThen100(true);
isHighThen100(102.3);
isHighThen100(15);