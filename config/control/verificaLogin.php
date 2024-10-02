<?php
    session_start();

    if(!isset($_SESSION['logado'])){
        $_SESSION['mensagemHome'] = 'Você não está logado, faça login para continuar...'; 
        header('Location: ../Home/home.php');
        exit();
    }
?>