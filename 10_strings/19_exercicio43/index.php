<?php
$str  = "carro-navio-helicóptero-barco-jangada";

$strArr = explode("-",$str);

for($x = 0;$x < count($strArr); $x++){
    echo "$strArr[$x]<br>";
}