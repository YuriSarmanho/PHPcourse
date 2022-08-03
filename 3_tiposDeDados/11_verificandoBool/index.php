<?php

function testeBool($valor){
    if(is_bool($valor)){
        echo "$valor É uma Bool <br>";
    }else{
        echo "$valor N é uma Bool <br>";
    }
}
    
testeBool(12);//false
testeBool(5.9);//false
testeBool("Yuri");//false
testeBool(true);//true
testeBool('');//Sao valores FALSE para bool
testeBool(NULL);//Sao valores FALSE para bool
