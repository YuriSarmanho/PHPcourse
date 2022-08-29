<?php
    require_once("templates/header.php");

    require_once("models/User.php");
    require_once("dao/UserDAO.php");

    $user = new User();
    $userDao = new UserDao($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);

    $fullname = $user->getFullName($userData);
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <form action="<?=$BASE_URL?>user_process.php" method="POST">
            <input type="hidden" name="type" value="update">
            <div class="row">
                <div class="col-md-4">
                    <h1><?=$fullname ?></h1>
                    <p class="page-description">Altere os seus dados no formulário a baixo:</p>
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Digite o seu nome" 
                        value="<?= $this->$userData->name?>">
                    </div>
                    <div class="form-group">
                        <label for="lastname">Sobrenome:</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Digite o seu sobrenome" 
                        value="<?= $this->$userData->lastname?>">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail:</label>
                        <input type="text" readonly class="form-control disable" id="email" name="email" placeholder="Digite o seu nome" 
                        value="<?= $this->$userData->email?>">
                    </div>
                    <input type="submit" class="btn form-btn" value="Alterar">
                </div>
                <div class="col-md-4">
                    <div id="profile-image-container" style="background-image: url('<?=$BASE_URL?>img/users/<?=');"></div>
                </div>
            </div>
        </form>
    </div>
</div>
  
<?php
    require_once("templates/footer.php");
?>