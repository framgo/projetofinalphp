<?php 
    session_start();

    date_default_timezone_set('America/Sao_Paulo');

    if(!array_key_exists('login', $_SESSION) || empty(isset($_SESSION['login'])))
    {
        $page = "errorPage.php";
        setcookie('notify', $msg, time() + 10, "/animes/{$page}", 'localhost');
        header("location: {$page}");
        exit;  
    }
    