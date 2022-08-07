<?php

$a = 1;
$b  = 1;
while($a <= 10){
    echo "Loop externo $a <br>";
    
    
    while($b <= 5){
        echo "Loop interno $b <br>";
        $b++;
    }
    $a++;
}