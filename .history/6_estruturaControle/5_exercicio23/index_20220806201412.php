<?php

function checkIdade($idade)
{
    if ($idade >= 18) {
        echo "É maior de idade";
    } else {
        echo "É menor de idade";
    }
}

checkIdade(18);
checkIdade(12);
checkIdade(18);
