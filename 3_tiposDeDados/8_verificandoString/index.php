<?php

function testeString($valor){
    if(is_string($valor)){
        echo "$valor É uma String <br>";
    }else{
        echo "$valor N é uma String <br>";
    }
}
    
testeString(12);//false
testeString(5.9);//false
testeString("Yuri");//true
testeString(true);//false