<?php

    require_once("globals.php");
    require_once("db.php");
    require_once("models/Movie.php");
    require_once("models/Message.php");
    require_once("DAO/UserDAO.php");
    require_once("DAO/MovieDAO.php");

    $message = new Message($BASE_URL);
    $userDao = new UserDAO($conn,$BASE_URL);

    //Regasta o tipo do formulário
    $type = filter_input(INPUT_POST, "type");

    //Resgata dados do usuário
    $userData = $userDao->verifyToken();

    if($type === "create") {
        // Receber os dados dos inputs
        $title = filter_input(INPUT_POST, "title");
        $description = filter_input(INPUT_POST, "description");
        $trailer = filter_input(INPUT_POST, "trailer");
        $category = filter_input(INPUT_POST, "category");
        $length = filter_input(INPUT_POST, "length");

        $movie = new Movie();

        if(!empty($title) && !empty($description) && !empty($category)) {
            
            $movie->title = $title;
            $movie->description = $description;
            $movie->trailer = $trailer;
            $movie->category = $category;
            $movie->length = $length;
            $mo

            //Upload de imagem do filme
            if(isset($_FILES["image"]) && !empty($_FILES["image"]["tmp_name"])) {
                $image = $_FILES["image"];
                $imageType = ["image/jpeg", "image/jpg", "image/png"];
                $jpgArray  = ["image/jpeg", "image/jpg"];

                //Checando tipo da imagem
                if(in_array($image["type"], $imageTypes)) {
                    
                    //Checa se imagem é jpg
                    if(in_array($image["type"], $jpgArray)) {
                        $imageFile = imagecreatefromjpeg($image["tmp_name"]);
                    } else {
                        $imageFile = imagecreatefrompng($image["tmp_name"]);
                    }
                    //Gerando nome da imagem
                    $imageName = $movie->imageGenerateName();

                    imagejpeg($imageFile, "./img/movies/" . $imageName, 100);
                } else {
                    $message->setMessage("Tipo inválido de imagem, insira png ou jpg!", "error", "back");
                }

            }
            
            $movieDao->create($movie);

        } else {
            $message->setMessage("Você precisa pelo menos adicionar: título, descrição e categoria!", "error", "back");
        }

    } else {
        $message->setMessage("Informações Inválidas!", "error");
    }