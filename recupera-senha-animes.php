<?php 
    require_once('repository/AnimesRepository.php'); 
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recupera senha | Animes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="col-6 offset-3">
    <fieldset>
            <legend>Recupera senha | Animes</legend>
            <form action="recupera-senha.php" method="post" class="form">
                <div class="mb-3 form-group">
                    <label for="emailId" class="form-label">E-mail</label>
                    <input type="email" name="email" id="emailId" class="form-control" placeholder="Informe o e-mail">
                    <div id="helperEmail" class="form-text">Informe o e-mail</div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                  <button type="submit" class="btn btn-dark">Enviar</button>
                  <br><br><a href="index.php" class="btn btn-dark">Fazer Login</a>
                </div>
                <?php if(isset($_COOKIE['notify'])) : ?>
                <div id="notify" class="form-text text-capitalize text-<?= $_COOKIE['status'] ?> fs-4"><?= $_COOKIE['notify'] ?></div>
                <?php endif; ?>
            </form>
        </fieldset>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>