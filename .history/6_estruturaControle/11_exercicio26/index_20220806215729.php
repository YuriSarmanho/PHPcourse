<?php

function velocidadeCarro($nome, $velocidade){
    if($velocidade < 40){
        echo "$nome vc está na velocidade correta";
    }else if($velocidade == 40){
        echo "Cuidado, vc está quase acima da velocidade";
    }
}