<?php 
    include('config.php');
    
    require_once('repository/AnimesRepository.php');
    
    $animes = fnLocalizaAnimesPorID($_SESSION['id']);
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
            <legend>Edição de AnimesHouse</legend>
            <form action="editaAnimes.php" method="post" class="form" enctype="multipart/form-data">
                <div class="card col-4 offset-4 text-center">
                    <img src="<?= $animes->foto ?>" id="animeId "class="rounded" alt="Foto do anime">
                </div>
                <div>
                    <input type="hidden" name="idAnimes" id="animesId"  value="<?= $animes->id ?>">
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
                    <input type="text" name="nome" id="nomeId" class="form-control" placeholder="Informe o nome do anime" value="<?= $animes->nome ?>">
                    <div id="helperNome" class="form-text">Informe o nome do anime</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="sinopseId" class="form-label">Sinopse</label>
                    <input type="text" name="sinopse" id="sinopseId" class="form-control" placeholder="Sinopse do anime" value="<?= $animes->sinopse ?>">
                    <div id="helperSinopse" class="form-text">Sinopse do anime</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="generoId" class="form-label">Gênero</label>
                    <input type="text" name="genero" id="generoId" class="form-control" placeholder="Informe o gênero do anime" value="<?= $animes->genero ?>">
                    <div id="helperGenero" class="form-text">Informe o gênero do anime</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="episodiosId" class="form-label">Episódios</label>
                    <input type="text" name="episodios" id="episodiosId" class="form-control" placeholder="Informe os episódios do anime" value="<?= $animes->episodios ?>">
                    <div id="helperEpisodios" class="form-text">Informe os episódios</div>
                </div>
                <div class="mb-3 form-group">
                    <label for="lancamentoId" class="form-label">Lançamento</label>
                    <input type="date" name="lancamento" id="lancamentoId" class="form-control" placeholder="Informe o lançamento do anime" value="<?= $animes->lancamento ?>">
                    <div id="helperLancamento" class="form-text">Informe o lançamento DD-MM-AAAA</div>
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