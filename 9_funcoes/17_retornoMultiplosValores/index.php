<?php

function teste($nome, $idade){
    $nome = "Sr. $nome";
    $idade = "$idade anos";

    return [$nome,$idade];
}


print_r(teste("yuri",21));

