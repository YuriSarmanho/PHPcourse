<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";
    
    $conn = new mysqli($host, $user, $pass, $db);


    $q = "SELECT * FROM itens";

    $result = $conn->query($q);

    $conn->close();

    // UM RESULTADO
    $itens = $result->fetch_all ();

    //TODOS OS RESULTADOS
    print_r($itens);