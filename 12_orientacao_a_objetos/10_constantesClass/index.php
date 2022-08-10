<?php

 class Humano{
    public const OLHOS = 2;
    public const BRACOS = 2;
    public const PERNA = 2;//metodos

    function mostrarConstante(){//propriedades
        echo self::BRACOS . "<br>";
    }
 }
 $yuri = new Humano;

 echo $yuri::OLHOS . "<br>";
 $yuri->mostrarConstante();