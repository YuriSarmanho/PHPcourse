<?php

class Cachorro{
    function latir(){
        echo "AU AU <br>";
    }
    function andar(){
        echo "Estou andando";
    }
}


$junio = new Cachorro;
$cissinho = new Cachorro;


$junio->latir();
$cissinho->andar();