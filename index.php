<?php
session_start();
$mensagem = "";
if (isset($_SESSION['mensagem'])) {
    $mensagem = $_SESSION['mensagem'];
    session_destroy();
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="./assets/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <?=$mensagem;?>
        </div>
        <div class="row">
            <div class="col-12">
                <fieldset>
                    <legend>Login na Loja</legend>
                    <form action="valida.php" method="post">
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" name="login" id="login">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control" name="senha" id="senha">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block" name="entrar" value="entrar">
                                <i class="fas fa-save"></i> Entrar
                            </button>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </div>
</body>
</html>