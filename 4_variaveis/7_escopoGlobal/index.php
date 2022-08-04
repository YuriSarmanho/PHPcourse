<?php

$varGlobal = 10;

echo "$varGlobal global01 <br>";

function teste01(){
    $varGlobal = 15;
    echo "$varGlobal function01 <br>";
}

teste01();
echo "$varGlobal global02 <br><br>";

function teste02(){
    global $varGlobal;
    $varGlobal = 15;
    echo "$varGlobal function02 <br>";
}

teste02();
echo "$varGlobal global03<br>";

