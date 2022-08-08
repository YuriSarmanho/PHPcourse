<?php
$a = "O rato roeu a roupa do rei de Roma";
$numA = 0;

for($i = 0;$i < strlen($a);$i++){
    if($a[$i] == "a"){
        $numA++;
    }
}

echo "A frase 'O rato roeu a roupa do rei de Roma' \n tem $numA letras 'a'.";