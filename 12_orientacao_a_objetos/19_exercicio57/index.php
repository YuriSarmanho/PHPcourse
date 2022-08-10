<?php

class Cachorro{
    public $nome;
    public $idade;
    public $raca;

    function __construct($nome,$idade,$raca)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->raca = $raca;
    }
    public function exibirAnimal(){
    echo "O $this->nome é da raça $this->raca e tem $this->idade anos";
}
}


$cissinho = new Cachorro("Cissinho",15,"Poodle");

$cissinho->exibirAnimal();