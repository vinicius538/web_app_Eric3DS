<?php 
    $dbHost = 'localhost';
    $dbUser = 'root';
    $dbPassword = '';
    $dbName = 'eric_web_app';

    $conexao = new mysqli($dbHost, $dbUser, $dbPassword, $dbName);

    if ($conexao->connect_error) {
        echo "Connection failed: " . $conexao->connect_error;
    }

?>