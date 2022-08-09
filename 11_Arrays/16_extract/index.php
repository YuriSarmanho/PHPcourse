<?php

$arr = [
    'cor' => 'vermelho',
    'forma' => 'retângular',
    'material' => 'aço'
];

$cor = 'preto';


extract($arr);//o valor da variavel nome é sobrescrita

echo "$cor <br>";
echo "$forma <br>";
echo "$material <br>";