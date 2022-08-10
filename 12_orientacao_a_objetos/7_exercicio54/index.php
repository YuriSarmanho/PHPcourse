<?php
class Pessoa{
    public $nome;
    public $idade;

    function andar($nome){
        echo "$nome está andando <br>";
    }
}


$yuri = new Pessoa;

$yuri->nome = "Yuri";
$yuri->idade = 21;

echo $yuri->andar("Yuri");



echo "O nome dele é $yuri->nome e tem $yuri->idade anos <br>";

$renata = new Pessoa;

$renata->nome = "Renata";
$renata->idade = 46;

echo $renata->andar("renata");



echo "O nome dele é $renata->nome e tem $renata->idade anos <br>";