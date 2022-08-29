<?php
    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("DAO/UserDAO.php");

    //Verifica o tipo do formulário

    $type = filter_input(INPUT_POST, "type")