<?php
    session_start();

    include('../db.php');

    //valores dos inputs
    $cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    //comando sql
    $sql = "select * from usuario where cpf = '$cpf' and senha = MD5('$senha')";

    //executar comando
    $result = mysqli_query($conexao, $sql);

    //verificar
    $verifica = mysqli_num_rows($result);

    if($verifica == 1){
        $usuario_bd = mysqli_fetch_assoc($result);

        //sessao de logado
        $_SESSION['logado'] = true;
        header('Location: ../../view/Home/home.php');
        exit();
    }else{
        header('Location: ../../view/Login/login.php');
        exit();
    }