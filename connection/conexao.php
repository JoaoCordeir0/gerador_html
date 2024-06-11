<?php

    session_start();
    
    $server = "localhost";
    $usuario = "root";
    $senha = "1234";
    $banco = "primeiro_software";

    try{
        $conexao = new PDO("mysql:host=$server;dbname=$banco", $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $erro){
        echo "Conex&atilde;o falhou : {$erro->getMessage()}";
        $conexao = null;
    }
?>