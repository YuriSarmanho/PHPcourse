<?php
require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("models/Message.php");
require_once("DAO/UserDAO.php");

$message = new Message($BASE_URL);

//Resgata o tipo do formulário

$type = filter_input(INPUT_POST, "type");

//Verifica o tipo de formulário
if ($type === "register") {

    $name = filter_input(INPUT_POST, "name");
    $lastname = filter_input(INPUT_POST, "lastname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");
    $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

    if($name && $lastname && $email && $password) {

    } else {
        //Enviar msg de erro, de dados faltantes
        $message->setMessage("Por favor, preecha todos os campos", "error")
    }

} else if ($type === "login") {
}
