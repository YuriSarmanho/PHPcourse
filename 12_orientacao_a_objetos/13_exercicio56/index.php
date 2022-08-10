<?php

class Humano{
    public $peso = 83.4;
    public $altura = 1.8;
    public $idade = 21;

    public function falar(){
        echo "Estou falando";
    }
}

class Pessoa extends Humano{
    public $nome = "yuri";
    public $corOlhos = "castanho";
}

$yuri = new Pessoa;

echo $yuri->peso."<br>";
echo $yuri->altura."<br>";
echo $yuri->idade."<br>";
echo $yuri->nome."<br>";
echo $yuri->corOlhos."<br>";

$yuri->falar();
echo "<br>";


echo "Meu nome é $yuri->nome, tenho $yuri->idade e meço $yuri->altura,
      meus olhos são $yuri->corOlhos e peso $yuri->peso.<br>";