<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?= include_once("templates/backbtn.html");?>
        <h1 id="main-title">Criando Contato</h1>
        <form action="<?=$BASE_URL?>config/process.php" method="POST">
    <input type="text">
</form>
    </div>
<?php
    include_once("templates/footer.php");
?>
