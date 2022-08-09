<?php

$arr = [1,2,3,4,34,23,4,12,2,3];

function soma ($a,$b){
    return $a + $b;
}

function mult ($a,$b){
    return $a - $b;
}

$resultado = array_reduce($arr, "soma");
$resultadoMult = array_reduce($arr, "mult");

echo "$resultado <br>";
echo "$resultadoMult <br>";