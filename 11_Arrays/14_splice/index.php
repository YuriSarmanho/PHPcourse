<?php

//RESGATAR ELEMENTOS DE ARRAY
//REMOVER ELEMENTOS

$arr =range(1,6);

$removidos = array_slice($arr,1,2);


print_r($arr);
echo "<br>";

print_r($removidos);
echo "<br>";

$arr1 =range(1,6);
$removidos1 = array_slice($arr1,1,-1);

print_r($arr1);
echo "<br>";

print_r($removidos1);
echo "<br>";