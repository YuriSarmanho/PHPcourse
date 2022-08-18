<?php

  $host = "localhost";
  $db = "cursophp";
  $user = "root";
  $pass = "";

  $conn = new PDO("mysql:host=$host; db=$db", $user,$pass); 

  $stmt = $conn->prepare("INSERT INTO itens (nome,descricao) VALUES (:nome, :descricao)");

  $nome = "Suporte Monitor";
  $descricao = "O suporte está novo e ainda esta na caixa";

  $stmt->bindParam(":nome", $nome);
  $stmt->bindParam(":descricao", $descricao);

  $stmt->execute();