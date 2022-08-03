<?php
$pessoa = [
    "nome" => "Yuri",
    "idade" => 21,
    "Altura" => 1.8,
    "peso" => 83.4,
    "Nacionalidade" => "Brasileiro"
];

function maiorDeIdade($idade){
    if($idade > 18){
        return true;
    }
    return false;
}

$nome = $pessoa["nome"];
$idade = $pessoa["idade"];

if(maiorDeIdade($pessoa["idade"])){
    echo "$nome é maior de idade, ele tem $idade anos";
}else{
    echo "$nome é menor de idade, ele tem $idade anos";
}