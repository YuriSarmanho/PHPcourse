<?php

function velocidadeCarro($velocidade){
    if($velocidade < 40){
        echo "Vc está na velocidade correta";
    }else if($velocidade == 40){
        echo "Cuidado, vc está quase acima da velocidade";
    }
}