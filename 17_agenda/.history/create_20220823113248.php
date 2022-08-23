<?php
    include_once("templates/header.php");
?>
    <div class="container">
        <?= include_once("templates/backbtn.html");?>
        <h1 id="main-title">Criando Contato</h1>
        <form action="<?=$BASE_URL?>config/process.php" method="POST">
            <input type="hidden" name="type" value="create">
            <div class="form-group">
                <label for="nome">Nome do Contato</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome">
            </div>
        </form>
    </div>
<?php
    include_once("templates/footer.php");
?>
