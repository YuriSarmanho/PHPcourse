<?php

function verificaNum($num){
    if($num%2 == 0){
        echo "O número $num é par <br>";
    }else{
        echo "O número $num é ímpar <br>";
    }
}

verificaNum(12);
verificaNum(13);
verificaNum(7);