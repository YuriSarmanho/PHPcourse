<?php
$a = 0;
while ($a < 10) {
    if ($a == 5) {
        $a++;
        continue;// pula o valor 5
    }

    echo "$a <br>";
    $a++;
}
