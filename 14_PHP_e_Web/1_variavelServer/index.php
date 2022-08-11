<?php
/*
SERVER_SOFTWARE => Identificação do sevidor
SERVER_NAME => Hostname, DNS ou IP do servidor
SERVER_PROTOCOL => Protocolo do servidor
SERVER_PORT => Porta do servidor
SERVER_STRING => Argumentos após o ? na URL 
*/

    #print_r($_SERVER);

    #echo "<br>";

    #echo $_SERVER['MYSQL_HOME'] . '<br>';

    if($_SERVER['SERVER_NAME'] == 'localhost'){
        echo "Está acessando o localhost <br>";
    }