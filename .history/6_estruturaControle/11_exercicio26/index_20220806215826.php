<?php

function velocidadeCarro($nome, $velocidade){
    if($velocidade < 40){
        echo "$nome vc está na velocidade correta";
    }else if($velocidade == 40){
        echo "Cuidado $nome, vc está quase acima da velocidade";
    }else{
        echo "$nome, vc recebeu uma multa por excesso de velocidade"
    }
}