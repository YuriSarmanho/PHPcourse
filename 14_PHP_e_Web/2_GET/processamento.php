<?php

    if(isset($_GET['nome'])){
        $nome = $_GET['nome'];
        $idade = $_GET['idade'];
    }else{
         $nome = "Padrão";
         $idade = "Padrão";
    }

?>

<h1>Seu nome é <?=$nome?></h1>
<h2>Sua idade é de <?=$idade?></h2>