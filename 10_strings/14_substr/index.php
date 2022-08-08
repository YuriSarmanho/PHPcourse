<?php
$str = "Esta é a minha string";
$minha = substr($str, 10,5);

echo $str."<br>";
echo $minha."<br>";


$str2 = "Testando está string asdnasdna";
$minha2 = substr($str2,8);
$minha3 = substr($str2,8,-4);


echo "$str2 <br>";
echo "$minha2 <br>";
echo "$minha3 <br>";
