<?php

    session_start();

    include_once("connections.php");
    include_once("url.php");

    $id;

    if()


    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);
    $stmt->execute();

    $contacts = $stmt->fetchAll();