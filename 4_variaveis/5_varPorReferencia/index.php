<?php
$x = 10;
$y =& $x;

echo $x;
echo "<br>";
echo $y;
echo "<br>";

$y = 15;

echo "Atribuição após ref<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";
