<?php

$a = 3;
$b = 5;
$c = 3;
$d = 1;

if($a < $b || $c != $d){
    echo "Operacao verdadeira <br>";
}

if($a < $d || $c != $d){
    echo "Operação Verdadeira <br>";
}

if($a == $d || $d != $d){
    echo "Operação Verdadeira <br>";
}