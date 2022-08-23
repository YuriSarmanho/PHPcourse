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
                <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome" require>
            </div>
            <div class="form-group">
                <label for="phone">Telefone do Contato</label>
                <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone do contato" require>
            </div>
            <div class="form-group">
                <label for="observations">Telefone do Contato</label>
                <input type="text" class="form-control" id="" name="phone" placeholder="Digite o telefone do contato" require>
            </div>
            <button type="submit" class="btn btn-primary">Cadastrar</button>
        </form>
    </div>
<?php
    include_once("templates/footer.php");
?>
