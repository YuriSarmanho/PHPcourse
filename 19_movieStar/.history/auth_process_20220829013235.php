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

    if ($name && $lastname && $email && $password) {
        //Verificar se as senhas batem
        if ($password === $confirmpassword) {

            //Verificar se o e-mail já está cadastrado no sistema
            if($userDAO->findByEmail($email) === false) {
                $user = new User();
                
                //Criação de Token e senha
                $userToken = $user->generateToken();
                $finalPassword = $user->generatePassword($password);

                $user->name = $name;
                $user->lastname = $lastname;
                $user->email = $email;
                $user->password = $password;
                $user->token = $token;

                $auth = true;

                $userDAO->create($user, $auth);
            } else {
                //Enviar uma msg de erro, o e-mail já seja existente no sistema
                $message->setMessage("Esse e-mail já foi cadastrado", "error", "back");
            }

        } else {
            //Enviar uma msg de erro, caso as senhas n forem iguais
            $message->setMessage("As senhas não são iguais", "error", "back");
        }
    } else {
        //Enviar msg de erro, de dados faltantes
        $message->setMessage("Por favor, preecha todos os campos", "error", "back");
    }
} else if ($type === "login") {
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    //Tenta autenticar o usuário
    if($) {

    } else {
        //Redireciona o usuário, caso n seja possível autenticar
    }
}
