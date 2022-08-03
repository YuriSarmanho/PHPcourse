<?php

$carro = [
    "marca" => "Ford",
    "modelo" => "mustang",
    "cor" => "preto",
    "portas" => "2"
];

echo $carro["marca"];
echo "<br>";
echo $carro["cor"];
echo "<br>";
echo $carro["modelo"];
echo "<br>";

$modelo = $carro["modelo"];
$carroCor = $carro["cor"];

echo "O meu $modelo é $carroCor";

