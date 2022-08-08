<?php

$a = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
$conta = 0;

while ($conta < count($a)) {

    if ($a[$conta] == 30 || $a[$conta] == 40) {
        $conta++;
        continue;
    }

    echo $a[$conta] . "<br>";
    $conta++;
}
