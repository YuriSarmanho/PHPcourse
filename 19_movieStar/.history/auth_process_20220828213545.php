<?php
require_once("globals.php");
require_once("db.php");
require_once("models/User.php");
require_once("DAO/UserDAO.php");

//Resgata o tipo do formulário

$type = filter_input(INPUT_POST, "type");

//Verifica o tipo de formulário
if ($type === "register") {

$name = filter_input(INPUT_POST, "name");
$name = filter_input(INPUT_POST, "name");
$name = filter_input(INPUT_POST, "name");
$name = filter_input(INPUT_POST, "name");


} else if ($type === "login") {
}
