<?php


function testeFloat($valor){
    if(is_float($valor)){
        echo "$valor É um float <br>";
    }else{
        echo "$valor N é um float <br>";
    }
}
    
testeFloat(12);//false
testeFloat(5.9);//true
testeFloat("yuri");//false
testeFloat(true);//false