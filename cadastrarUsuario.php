<?php

session_start();
require_once('repository/LoginRepository.php');


$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);

if(empty($email) || empty($senha)) {
    $msg = "Preencha todos os campos";    
    } else { 
        if(fnRegistrarUsuario($email, $senha)) {
            $msg = "Sucesso ao cadastrar";
        } else {
            $msg = "Não foi possivel se cadastrar";
        }
    }

        $page = "index.php";
        setcookie('notify', $msg, time() + 10, "/projetofinal/{$page}", 'localhost');
        header("location: {$page}");
        exit;