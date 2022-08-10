<?php
 
 class Humano {
    public $idade = 29;


    public function falar(){
        echo "Olá mundo! <br>";
    }
    private function gritar(){
        echo "PHP É MUITO BOM!!! <br>";
    }

    public function acessaGritar(){
        $this->gritar();
    }

    protected function falarBaixinho(){
        echo "lalala <br>";
    }
    public function acessaBaixinho(){
        $this->falarBaixinho();
    }
 }

 class Programador extends Humano{//consegue ter acesso as propriedades de Humano
  
    public function acessaBaixinhoProgramador(){//consegue acessar as propriedades que são protected
        $this->falarBaixinho();
    }
 }

 $ze = new Humano;

 $ze->falar();
 $ze->acessaGritar();
 $ze->acessaBaixinho();

 $yuri = new Programador;

 $yuri->falar();
 echo $yuri->idade . "<br>";
 $yuri->acessaGritar();
 $yuri->acessaBaixinho();
 $yuri->acessaBaixinhoProgramador();