<?php
    require_once("globals.php");
    require_once("db.php");
    require_once("models/User.php");
    require_once("models/Message.php");
    require_once("DAO/UserDAO.php");

    $message = new Message($BASE_URL);

    $userDao = new UserDAO($conn, $BASE_URL);

    //Resgata o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    //Atualizar usuário
    if($type === "update") {

        //Resgata dados do usuário
        $userData = $userDao->verifyToken();
        
        //Recebendo Dados do input
        $name = filter_input(INPUT_POST, "name");
        $lastname = filter_input(INPUT_POST, "lastname");
        $email = filter_input(INPUT_POST, "email");
        $bio = filter_input(INPUT_POST, "bio");
        
        //Criar um novo objeto de usuário
        $user = new User();

        //Preencha os dados do usuário
        $this->$userData->name = $name;
        $this->$userData->lastname = $lastname;
        $this->$userData->email = $email;
        $this->$userData->bio = $bio;

        //Upload da imagem
        if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {

            $image = $_FILES["image"];
            $imageTypes = ["image/jpeg", "image/jpg", "image/png"];

            //Checagem de tipo de imagem
            if(in_array($image["type"], $imageTypes)) {

                //Checar se jpg
                if(in_array($image,$jpgArray)) {
                    $imageFile = imagecreatefromjpeg($image["tmp_name"]);

                // Imagem é png    
                } else {

                    $imageFile = imagecreatefrompng($image["tmp_name"]);

                }
                $imageName = $user->imageGenerateName();

                imagejpeg($imageFile, "./img/users/" . $imageName, 100);

                $this->$userData->image = $imageName;

            } else {
                $message->setMessage("Tipo inválido de imagem!", "error", "back");

            }
        }

        $userDao->update($this->$userData);
        // Atualizar senha do usuário
    } else if($type === "changepassword") {
        //Receber dados do post
        $password = filter_input(INPUT_POST, "password");
        $confirmpassword = filter_input(INPUT_POST, "confirmpassword");

        //Resgata dados do usuário
        $userData = $userDao->verifyToken();
        $id = $this->$userData->id;


        if($password == $confirmpassword) {

            //Criar um novo obj de usuário
            $user = new User();

            $finalPassword = $user->generatePassword($password);

            $user->password = $finalPassword;
            $user->id = $id;

            $userDao->changePassword($user);

        } else {
            $message->setMessage("As senhas não são iguais!", "error", "back");
        }
    } else {
        $message->setMessage("Informações inválidas!", "error", "index.php");
    }