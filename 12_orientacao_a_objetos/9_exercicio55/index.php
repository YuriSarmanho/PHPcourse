<?php

class Car{
    public $velocidadeMax;//propriedade

    function setVelocidadeMax($vel){//método
        $this->velocidadeMax = $vel;
    }

    function getVelocidadeMax(){
        echo "A velocidade máxima do carro é 
                de $this->velocidadeMax KM/H <br>";
    }
}


$bugatti = new Car;
$bugatti->setVelocidadeMax(495);


$bugatti->getVelocidadeMax();