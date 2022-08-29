<?php
    require_once("templates/header.php");

    require_once("models/User.php");
    require_once("dao/UserDAO.php");

    $userDao = new UserDao($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);
    $user = new User();
    $fullname = $user->getFullName($userData);
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <form action="<?=$BASE_URL?>user_process.php" method="POST">
            <input type="hidden" name="type" value="update">
            <div class="row">
                <div class="col-md-4">
                    <h1><?=$fullname ?></h1>
                </div>
            </div>
        </form>
    </div>
</div>
  
<?php
    require_once("templates/footer.php");
?>