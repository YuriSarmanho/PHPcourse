<?php

    session_start();

    include_once("connections.php");
    include_once("url.php");

    $id;

    if(!empty($_GET)) {
        $id = $_GET['id']
    }


    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $contacts = $stmt->fetchAll();