<?php

    session_start();

    include_once("connections.php");
    include_once("url.php");

    $id;

    if(!empty($_GET)) {
        $id = $_GET['id'];
    }

    //Retorna o dado do contato
    if(!empty($id)) {

        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = 

    } else {
        //Retorna todos os contatos
    
        $query = "SELECT * FROM contacts";
    
        $stmt = $conn->prepare($query);
        $stmt->execute();
    
        $contacts = $stmt->fetchAll();
    }

