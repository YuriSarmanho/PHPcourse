<?php

$arr = [
    'Alyne'=>29,
    'Yuri'=>21,
    'Ney'=>57,
    'Renata'=>46
];


asort($arr);//ordenação pelos valores dos Values do array

print_r($arr);
echo "<br>";

ksort($arr);//ordenação pelos valores das Keys do array

print_r($arr);
echo "<br>";