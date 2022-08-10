<?php

    interface Caracteristicas{
        const nome = "Yuri";
        public function falar();

    }

    class Humano implements Caracteristicas{
        public $idade = 21;

        public function falar(){
            echo "Olá mundo!<br>";
        }
        public function dizerNome(){
            echo "Meu nome é " . self::nome . "<br>";
        }

    }
    $yuri = new Humano;
    $yuri->falar();
    $yuri->dizerNome(); 