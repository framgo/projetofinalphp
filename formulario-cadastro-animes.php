<?php 
    include('config.php');
?>

<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário Cadastro AnimesHouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
  <?php include('navbar.php'); ?>
    <div class="col-6 offset-3">
        <fieldset>
            <legend>Cadastro de AnimesHouse</legend>
                <form action="registraAnimes.php" method="post" class="form" enctype="multipart/form-data">
                <div class="card col-4 offset-4">
            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Foto do anime" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Foto do anime</text>
            </svg>
                </div>
                <div class="mb-3 form-group">
                <label for="fotoId" class="form-label">Foto</label>
                <input type="file" name="foto" id="fotoId" class="form-control">
                <div id="helperFoto" class="form-text">Coloque do foto anime</div>
            </div> 
                <div class="mb-3 form-group">
                   <label for="zipId" class="form-label">Conteudo do anime</label>
                    <input type="file" name="arquivo" id="zipId" class="form-control">
                <div id="helperZip" class="form-text">Informe o conteudo do anime</div>
            </div>
                <div class="mb-3 form-group">
                    <label for="nomeId" class="form-label">Nome</label>
                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome do anime" >
                    <div id="helperNome" class="form-text">Informe o nome do anime</div>
            </div>
                <div class="mb-3 form-group">
                    <label for="sinopseId" class="form-label">Sinopse</label>
                    <input type="text" name="sinopse" id="sinopseId" class="form-control" placeholder="Sinopse do anime" >
                    <div id="helperSinopse" class="form-text">Sinopse do anime</div>
            </div>
                <div class="mb-3 form-group">
                    <label for="generoId" class="form-label">Gênero</label>
                    <input type="text" name="genero" id="generoId" class="form-control" placeholder="Informe o gênero do anime" >
                    <div id="helperGenero" class="form-text">Informe o gênero do anime</div>
            </div>
                <div class="mb-3 form-group">
                    <label for="episodiosId" class="form-label">Episódios</label>
                    <input type="number" name="episodios" id="episodiosId" class="form-control" placeholder="Informe os episódios do anime" >
                    <div id="helperEpisodios" class="form-text">Informe os episódios</div>
            </div>
                <div class="mb-3 form-group">
                    <label for="lancamentoId" class="form-label">Lançamento</label>
                    <input type="date" name="lancamento" id="lancamentoId" class="form-control" placeholder="Informe o lançamento do anime" >
                    <div id="helperLancamento" class="form-text">Informe o lançamento DD/MM/AAAA</div>
            </div>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <div id="notify" class="form-text text-capitalize fs-4"><?= isset($_COOKIE['notify']) ? $_COOKIE['notify'] : '' ?></div>
            </form>
        </fieldset>
    </div>
    <?php include("rodape.php"); ?>
    <script src="js/base64.js"></script>
  </body>
</html>