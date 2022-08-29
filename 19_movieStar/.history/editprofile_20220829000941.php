<?php
    require_once("templates/header.php");

    require_once("dao/UserDAO.php");

    $userDao = new UserDao($conn, $BASE_URL)
?>

<div id="main-container" class="container-fluid">
    <h1>Edição de perfil</h1>
</div>
  
<?php
    require_once("templates/footer.php");
?>