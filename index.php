<?php 
    require_once('repository/AnimesRepository.php');
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | AnimesHouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-6 offset-3">
    <fieldset>
            <legend>Login | AnimesHouse</legend>
            <form action="loginSistema.php" method="post" class="form">
                <div class="mb-3 form-group">
                    <label for="emailId" class="form-label">E-mail</label>
                    <input type="email" name="email" id="emailId" class="form-control" placeholder="Informe o e-mail">
                    <div id="helperEmail" class="form-text">Informe o e-mail</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="senhaId" class="form-label">Senha</label>
                    <input type="password" name="senha" id="senhaId" class="form-control" placeholder="Informe a senha">
                    <div id="helperSenha" class="form-text">Informe a senha</div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                  <button type="submit" class="btn btn-dark" name="enviar">Login</button>
                  <br><br><a href="recupera-senha-animes.php" class="btn btn-dark">Recupera senha</a>
                  <br><br><a href="cadastrar.php" class="btn btn-dark">Sem cadastro?</a>
                </div>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>
        </fieldset>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>