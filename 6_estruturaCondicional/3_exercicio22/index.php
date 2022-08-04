<?php

$idade01 = 21;
$idade02 = 13;
$idade03 = 18;
$idade04 = 9;



function checkIdade($idade){
    if($idade >= 18){
        echo "É maior de idade <br>";
    }else{
        echo "É menor de idade <br>";
    }
}

checkIdade($idade01);
checkIdade($idade02);
checkIdade($idade03);
checkIdade($idade04);