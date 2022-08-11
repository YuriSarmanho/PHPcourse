<?php

$dataA = new DateTime();
$dataB = new DateTime();

$dataC = new DateTime();

$dataB->setDate(2023,10,10);
$dataC->setDate(2023,10,10);
                                //A data e a hora precisam ser iguais para que uma compração de igualdade de verdadeira
$dataB->setTime(01,10,10);
$dataC->setTime(01,10,10);

if($dataB > $dataA){
    echo "A data B é maior que a data A <br>";
}

if($dataA < $dataB){
    echo "A data A é menor que a data B <br>";
}

if($dataB == $dataC){
    echo "A data A é igual a data C  <br>";
}