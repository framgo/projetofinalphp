<?php 
    include('config.php');
    
    require_once('repository/AnimesRepository.php');
    
    $nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
?>

<!doctype html>
<html lang="pt_BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Listagem de AnimesHouse</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php'); ?>     
    <div class="col-6 offset-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Sinopse</th>
                    <th>Genero</th>
                    <th>Episodios</th>
                    <th>Lançamento</th>
                    <th>Data cadastro</th>
                    <?php if($_SESSION['login']->id == 1){
                        ?>
                    <th colspan="2">Gerenciar</th>
                    <?php } else {
                        "";
                       } ?>
                </tr>
            </thead>
            <tbody>
                <?php foreach(fnLocalizaAnimesPorNome($nome) as $animes): ?>
                <tr>
                    <td><?= $animes->id ?></td>
                    <td><?= $animes->nome ?></td>
                    <td><?= $animes->sinopse ?></td>
                    <td><?= $animes->genero ?></td>
                    <td><?= $animes->episodios ?></td>
                    <td><?= $animes->lancamento ?></td>
                    <td><?= $animes->created_at ?></td>
                    <?php if($_SESSION['login']->id == 1){
                        ?>
                        <td><a href="#" onclick="gerirAnimes(<?= $animes->id ?>, 'edit');">Editar</td>
                        <td><a onclick="return confirm('Deseja realmente excluir?') ? gerirAnimes(<?= $animes->id ?>, 'del') : '';" href="#">Excluir</td>
                       <?php } else {
                        "";
                       } ?>
                    </tr>
                <?php endforeach; ?>
            </tbody>
            <?php if(isset($notificacao)) : ?>
            <tfoot>
                <tr>
                    <td colspan="8"><?= $_COOKIE['notify'] ?></td>
                </tr>
            </tfoot>
            <?php endif; ?>
        </table>
    </div>
    <?php include("rodape.php"); ?>
    <script>

        window.post = function(data) {
            return fetch(
                'set-session.php',
                {
                    method: 'POST',
                    headers: {'Content-Type': 'application/json'},
                    body: JSON.stringify(data)
                }
            )
            .then(response =>{
                console.log(`Requesição completa! Resposta:`, response);
            });
        }

        function gerirAnimes(id, action) {

            post({data : id});

            url = 'excluirAnimes.php';
            if(action === 'edit')
            url = 'formulario-edita-animes.php';

            window.location.href = url;
        }
    </script>
  </body>

</html>