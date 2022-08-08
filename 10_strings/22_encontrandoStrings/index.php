<?php

$str = "Estamos testando o método strpos, com o strpos podemos encontrar strings";

$testeEncontrar = strpos($str,"strpos");//retorna a posição
echo "$testeEncontrar <br>";

$testeEncontrar2 = strpos($str,"JAVA");//retorna FALSE
echo "$testeEncontrar2 <br>";