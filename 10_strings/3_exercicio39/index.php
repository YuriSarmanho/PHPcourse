<?php

$itens = [
    "caderno" => 6.5,
    "borracha" => 2,
    "caneta"=> 4,
    "tv" => 1200,
    "ps4" => 2800,
    "Cafeteira"=> 89.99
];


function itensCaros($itens){
    $arrItensCaros= [];

    foreach($itens as $item => $preco){
        if($preco > 10){
            array_push($arrItensCaros,$item);
        }
    }
    return $arrItensCaros;
}
$novoArr = itensCaros($itens);

print_r($novoArr);