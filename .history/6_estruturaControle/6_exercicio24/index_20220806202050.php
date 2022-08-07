<?php
 
$nome = "Yuri";
$idade = 21;
$isMale = true;


function checkVar($var){
    if(is_int($var)){
        echo "A variável $var é um inteiro";
    }else{
        echo "A variável $var n é um inteiro"
    }
}