<?php

function checkIdade($idade)
{
    if ($idade >= 18) {
        echo "É maior de idade <br>";
    } else {
        echo "É menor de idade <br>";
    }
}

checkIdade(18);
checkIdade(12);
checkIdade(15);
