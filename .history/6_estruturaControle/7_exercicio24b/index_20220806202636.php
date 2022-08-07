<?php

function isHeavy($peso){
    if($peso > 80){
        echo "Vc está acima do peso <br>";
    }else{
        echo "Vc está no peso certo <br>";
    }
}

isHeavy(78);
isHeavy(100);
isHeavy(55);