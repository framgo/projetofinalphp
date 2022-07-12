<?php 
    include('config.php'); 
    
    require_once('repository/AnimesRepository.php');
    require_once('util/base64.php');
   
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>
<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - AnimeHouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/home.css">
  </head>
  <body>
    <?php include('navbar.php'); ?>
    <div class="col-10 offset-1 mt-3">
    <div class="p-5 mb-4 bg-light rounded-3">
      <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">AnimesHouse</h1>
        <p class="col-md-8 fs-4">Bem-vindo ao site AnimesHouse 😎</p>
      </div>
    </div>
    </div>
    <?php foreach(fnLocalizaAnimesPorNome($nome) as $animes): ?>
      <div class="card">
      <img src="<?= $animes->foto ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Nome: <?= $animes->nome ?></h5>
    <p class="card-text">Sinopse: <?= $animes->sinopse ?></p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Genero: <?= $animes->genero ?></li>
    <li class="list-group-item">Episodios: <?= $animes->episodios ?></li>
    <li class="list-group-item">Lançamento: <?= $animes->lancamento ?></li>
    <a href="<?= $animes->zip ?>" class="btn btn-dark" download>Baixar Primeira Temporada</a>
  </ul>
</div>
<?php endforeach; ?>
    <?php include("rodape.php"); ?>
  </body>

</html>