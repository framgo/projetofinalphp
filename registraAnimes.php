<?php

require_once('repository/AnimesRepository.php');
require_once('util/uploadArquivo.php');
require_once('util/base64.php');

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$sinopse = filter_input(INPUT_POST, 'sinopse', FILTER_SANITIZE_SPECIAL_CHARS);
$genero = filter_input(INPUT_POST, 'genero', FILTER_SANITIZE_SPECIAL_CHARS);
$episodios = filter_input(INPUT_POST, 'episodios', FILTER_SANITIZE_NUMBER_INT);
$lancamento = filter_input(INPUT_POST, 'lancamento', FILTER_SANITIZE_NUMBER_INT);

$foto = converterBase64($_FILES['foto']);
$zip = uploadArquivo($_FILES['arquivo']);

if(empty($nome) || empty($foto) || empty($sinopse) ||empty($genero) || empty($episodios) || empty($lancamento) || empty($zip)){
$msg = "Preencha todos os campos";    
} else {  
    if(fnAddAnimes($nome, $foto , $sinopse ,$genero, $episodios, $lancamento, $zip)) {
        $msg = "Publicação criada com sucesso";
    } else {
        $msg = "Não foi possivel criar a publicação";
    }
}

    $page = "formulario-cadastro-animes.php";
    setcookie('notify', $msg, time() + 10, "/projetofinal/{$page}", 'localhost');
    header("location: {$page}");
    exit;