<?php
    require_once("templates/header.php");
?>

<div id="main-container" class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                    <input type="hidden" name="type" value="register">
            </div>
                    <input type="hidden" name="type" value="register">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite o seu e-mail">
                </div>
                <input type="submit" class="btn card-btn" value="Entrar">
            </form>
            <div class="col-md-4" id="register-container">
                <h2>Criar conta</h2>
                <form action="" method="POST">
                    <input type="hidden" name="type" value="register">
                </form>
            </div>
        </div>
    </div>
</div>
  
<?php
    require_once("templates/footer.php");
?>