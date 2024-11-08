<?php
    $bdHost = 'Localhost';
    $bdUsername = 'root';
    $bdPassowrd = 'root';
    $bdName = 'bd_loja';
    $conexao = new mysqli($bdHost, $bdUsername, $bdPassowrd, $bdName);
    $conexao->set_charset("utf8mb4");
?>