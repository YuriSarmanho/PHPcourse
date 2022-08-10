<?php
//checar se um obj é uma instancia de uma class
//resulta em um bool


class Humano{

}

class Animal{

}

class Professor extends Humano{

}

$marcos = new Humano;
$turca = new Animal;
$pedro = new Professor;

if($marcos instanceof Humano){
    echo "Marcos é um Humano <br>";
}else{
    echo "Marcos n é um Humano <br>";
}

if($turca instanceof Humano){
    echo "Turca é um Humano <br>";
}else{
    echo "A Turca n é um Humano <br>";
}


if($pedro instanceof Professor){
    echo "pedro é um Humano <br>";
}else{
    echo "A pedro n é um Humano <br>";
}

if($pedro instanceof Humano){//ancestral
    echo "pedro é um Humano <br>";
}else{
    echo "A pedro n é um Humano <br>";
}