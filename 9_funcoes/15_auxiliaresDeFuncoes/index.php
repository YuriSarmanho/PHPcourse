<?php

function soma($a,$b){
    print_r(func_get_args());//retorna um Array com os valores da função
    echo "<br>";
    echo func_num_args() . "<br>";//Retorna a quantidade de valores recebidos pela função

    return $a+$b;
}

soma(2,3);