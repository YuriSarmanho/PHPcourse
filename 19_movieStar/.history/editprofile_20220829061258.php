<?php
    require_once("templates/header.php");

    require_once("dao/UserDAO.php");

    $userDao = new UserDao($conn, $BASE_URL);

    $userData = $userDao->verifyToken(true);
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <form action="<?" method="POST"></form>
    </div>
</div>
  
<?php
    require_once("templates/footer.php");
?>