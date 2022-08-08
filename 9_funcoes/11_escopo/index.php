<?php

$a = 10;
$b = 15;

function testeEscopo(){
    $a = 5;
    global $b;
    echo "Escopo local de A:$a . <br>";
}

echo "Escopo global de A:$a .<br>";