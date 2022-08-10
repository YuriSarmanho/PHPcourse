<?php

use Humano as GlobalHumano;

    class Humano{
        public $idade;
        public $nome;
        public $profissao;

        public function teste(){
            echo "teste <br>";
        }
    }

    if(class_exists("Humano")){
        echo "classe existe";
    }

    print_r(get_class_vars("Humano"));

    print_r(get_class_methods("Humano"));

