<?php

$nome = "Junior";
$raça = "Poodle";
$cor = "branco";
$idade = "14";


$cachorro = compact("nome","raça","cor","idade");
$keys = array_keys($cachorro);

foreach($cachorro as $var => $value){
    echo $value."<br>";
}
echo "<br>";
echo "<br>";

//Segunda forma de fazer
for($i = 0;$i<count($cachorro);$i++){
   echo $cachorro[$keys[$i]] . "<br>";
}