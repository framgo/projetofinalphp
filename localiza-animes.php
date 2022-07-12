<?php

    require_once('repository/AnimesRepository.php');
    $nome = filter_input(INPUT_POST, 'nomeAnimes', FILTER_SANITIZE_SPECIAL_CHARS);

    header("location: home.php?nome={$nome}");
    exit;