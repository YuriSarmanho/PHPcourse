<?php
$arr = [
    'nome'=>'Yuri',
    'idade'=>21
];

if(array_key_exists('nome',$arr)){
    echo "A chave existe <br>";
}else{
    echo "A chave n existe <br>";
}

if(array_key_exists('carro',$arr)){
    echo "A chave existe <br>";
}else{
    echo "A chave n existe <br>";
}

//ISSET

if(isset($arr['nome'])){
    echo "A chave existe <br>";
}else{
    echo "A chave n existe <br>";
}

if(isset($arr['carro'])){
    echo "A chave existe <br>";
}else{
    echo "A chave n existe <br>";
}
