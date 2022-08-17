<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "cursophp";

    $conn = new mysqli($host, $user, $pass, $db);

    $table = "itens";
    $nome = "xícara";
    $descricao = "É uma xícara de cor rosa";

    $q = "INSERT INTO $table (nome,descricao) VALUES ('$nome', '$descricao')";

    $conn->query($q);

    $conn->close();