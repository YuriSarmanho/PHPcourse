<?php

class Car{
    public $rodas = 4;
    public $aro = 20;
    public $cor = "Vermelha";
}

$ferrari = new Car;

echo $ferrari->aro;
echo "<br>";
echo $ferrari->rodas;
echo "<br>";
echo $ferrari->cor = "Azul";//atribuindo um novo valor para a propriedade da class