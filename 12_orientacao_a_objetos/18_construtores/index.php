<?php

class Car{
    public $portas;
    public $cor;
    public $marca;

    function __construct($portas,$cor,$marca){
        //Os valores que chegam como parâmetro são usados para os atribuir valores aos objetos
        $this->porta = $portas;
        $this->cor = $cor;
        $this->marca = $marca;
    }
}


$ferrari = new Car(4,"vermelho","Ferrari");

echo "O carro é da marca $ferrari->marca e tem a cor $ferrari->cor <br>";

$mustang = new Car(4,"preto","Ford");

echo "O carro Mustang é da marca $mustang->marca e é $mustang->cor <br>";
