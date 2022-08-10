<?php

 class Pessoa{

    function falar(){
        echo "Olá eu sou um objeto! <br>";
    }
    function soma($x,$y){
        echo $x+$y . "<br>";
    }
 }

 $yuri = new Pessoa;
 $matheus = new Pessoa;

 $yuri->falar();

$yuri->soma(2,3);
$matheus->soma(4,5);

