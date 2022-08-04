<?php

$a = 3;
$b = 5;
$c = 3;
$d = 1;

if(!true){
    echo "Operacao falsa <br>";
}

if(!($a < $d || $c != $d)){
    echo "Operação falsa <br>";
}

if(!($a == $d || $d != $d)){
    echo "Operação Verdadeira, negando uma operação falsa <br>";
}