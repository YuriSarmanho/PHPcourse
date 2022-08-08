<?php

$arr = [];

for ($cont = 10; $cont < 21; $cont++) {
    array_push($arr, $cont);
}


for ($cont = 0; $cont < count($arr); $cont++) {
    if ($arr[$cont] % 2 == 0) {
        continue;
    }

    echo "$arr[$cont] <br>";
}
