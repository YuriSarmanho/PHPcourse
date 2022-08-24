<?php

    include_once("db.php");
    include_once("dao/CarDAO.php");

    $carDAO = new CarDao($conn);

    $brand = $_POST["brand"];
    $km = $_POST["km"];
    $color = $_POST["color"];

    $newCar = new Car();

    $newCar->setBrand($brand);
    $newCar->setkm($km);
    $newCar->setColor($color);

    $carDAO->create($newCar);

    header("Location: index.php");