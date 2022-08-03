<?php

 class Pessoa {
    function falar(){
        echo "Eai glr";
    }
 }

 $yuri = new Pessoa();

 $yuri->$nome = "Yuri";
 echo $yuri->nome;
 echo "<br>";
 $yuri->falar();