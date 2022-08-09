<?php
$comida = ['batata','maçã','pera','feijão','arroz'];

$remove = array_splice($comida,3,-1);

echo $remove[0]."<br>";
print_r($comida);