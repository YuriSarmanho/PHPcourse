<?php
//public protected private
 class Car{

    public $rodas = 4;
    private $vidro = "Sem película";// Agora a propriedade vidro é privada e n pode ser alterada via métodos de outras classes
    protected $porta = 4;

    public function getVidro(){
        return $this->vidro;
    }

    public function getPortas(){
        return $this->porta;
    }

    public function peliculaDeFabrica($pelicula){
        $this->vidro = $pelicula;
    }
 }

 class Mecanico{

    public function alterarRodas($carro){
        $carro->rodas = 10;
    }

    public function colocarPelicula($carro){
        $carro->vidro = "Com película";
    }

 }
 $carro = new Car;

 echo "$carro->rodas <br>";
 echo $carro->getVidro (). "<br>";

 $yuri = new Mecanico;

 //alteração de dados de um objeto apartir de outro
 $yuri->alterarRodas($carro);// $yuri vai alterar as rodas do objeto carro
 //$yuri->colocarPelicula($carro); N pode alterar pq é privado


 echo $carro->rodas . "<br>";

 $carro->peliculaDeFabrica("G15");
 echo $carro->getVidro (). "<br>";
 echo $carro->getPortas()."<br>";