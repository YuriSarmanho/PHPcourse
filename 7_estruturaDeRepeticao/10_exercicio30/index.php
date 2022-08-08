<?php

$arr = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];


//Quando eu crio o array pelo for da Erro
// for ($cont = 1; $cont < 21; $cont++) {
//     $arr[$cont] = $cont;
// }

for ($cont = 0; $cont < count($arr); $cont++) {
    if ($arr[$cont] % 2 == 0) {
        echo $arr[$cont]."<br>";
    }
}
