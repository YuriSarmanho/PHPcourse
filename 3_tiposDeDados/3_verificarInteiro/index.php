<?php

function testeInt($valor){
    if(is_int($valor)){
        echo "$valor É um int <br>";
    }else{
        echo "$valor N é um int <br>";
    }
}
    
testeInt(12);//true
testeInt(5.9);//false
testeInt("yuri");//false
TesteInt(true);//false