<?php
    session_start();
    require_once('repository/LoginRepository.php');

    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
    
    $page = "home.php";

    if(!$_SESSION['login'] = fnLoginAnimes($email, $senha)) {
        $page = "errorPage.php?";
        
        setcookie('notify', 'Falha ao efetuar o login', (time() + 10), '/projetofinal/errorPage.php', 'localhost', isset($_SERVER['HTTPS']), true);
    }
    
    header("location: {$page}");
    exit;