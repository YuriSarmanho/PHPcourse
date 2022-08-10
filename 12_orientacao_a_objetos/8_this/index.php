<?php

 class Animal{

    public $nome;
    function escolherNome($nome){
        $this->nome = $nome;
    }

    function latir(){
        return "Au au";
    }
    function latirForte(){
        return strtoupper($this->latir());
    }
 }


 $frida = new Animal;

 $frida->escolherNome("Frida");
 echo "O nome do animal é: $frida->nome <br>";

 echo $frida->latirForte();