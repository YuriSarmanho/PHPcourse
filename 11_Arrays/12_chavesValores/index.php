<?php
$carro = [
    'marcar' => 'BMW',
    'motor' => '2.4',
    'tetoSolar' => true,
    'cambio' => 'manual',
    'portas' => 4
];

$chaves = array_keys($carro);
$valores = array_values($carro);

echo "<h5>Keys</h5><br>";
print_r($chaves);
echo "<br>";
echo "<h5>Values</h5><br>";
print_r($valores);
echo "<br>";