<?php

$a = 1;

while ($a <= 10) {

    echo "Loop externo $a <br>";
    $b  = 1;
    while ($b <= 5) {
        echo "Loop interno $b <br>";
        $b++;
    }
    $a++;
}
