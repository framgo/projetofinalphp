<?php
    session_start();
    require_once('repository/AnimesRepository.php');


    if(fnDeleteAnimes($_SESSION['id'])) {
       $msg = "Excluido com sucesso";
    } else {
        $msg = "Não foi possivel deletar";
    }

    unset($_SESSION['id']);

    $page = "listagem-de-animes.php";
    setcookie('notify', $msg, time() + 10, "/projetofinal/{$page}", 'localhost');
    header("location: {$page}");
    exit;