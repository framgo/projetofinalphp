<?php
session_start();
require_once('repository/AnimesRepository.php');
require_once('util/uploadArquivo.php');
require_once('util/base64.php');

$id = filter_input(INPUT_POST, 'idAnimes', FILTER_SANITIZE_NUMBER_INT);
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$episodios = filter_input(INPUT_POST, 'episodios', FILTER_SANITIZE_NUMBER_INT);
$lancamento = filter_input(INPUT_POST, 'lancamento', FILTER_SANITIZE_NUMBER_INT);

$foto = converterBase64($_FILES['foto']);
$zip = uploadArquivo($_FILES['arquivo']);

    if(fnUpdateAnimes($id, $nome, $foto, $sinopse ,$genero, $episodios, $lancamento, $zip)) {
       $msg = "Editado com sucesso";
    } else {
        $msg = "Não foi possivel editar";
    }

    $_SESSION['id'] = $id;    
    $page = "formulario-edita-animes.php";
    setcookie('notify', $msg, time() + 10, "/projetofinal/{$page}", 'localhost');
    header("location: {$page}");
    exit;