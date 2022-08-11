<?php

//setDate => Recebe y,m,d , alterando completamente a data
//setTime => Recebe hora, min,seg , alterando o tempo da data


$data = new DateTime();

print_r($data);
echo "<br>";

$data->setDate(2001,02,12);


print_r($data);
echo "<br>";


$data->setTime(5,34,12);

print_r($data);
echo "<br>";