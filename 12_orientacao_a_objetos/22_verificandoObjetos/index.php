<?php

 class Humano{
    public function falar(){
        echo "ola";
    }
 }

 $yuri = new Humano;


 if(is_object($yuri)){
    echo "é um objeto <br>";
 }

 echo get_class($yuri);
echo "<br>";
 if(method_exists($yuri,"falar")){
    echo "método exite <br>";
 }