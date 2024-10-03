<?php
    session_start();

    include('../db.php');

    //valores dos inputs
    $cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    //comando sql
    $sql = "select * from usuario where cpf = '$cpf' and senha = MD5('$senha')";

    //executar comando
    $query = mysqli_query($conexao, $sql);

    //verificar
    $verifica = mysqli_num_rows($query);

    if($verifica == 1){
        $usuario_bd = mysqli_fetch_assoc($query);

        //sessao de logado
        $_SESSION['logado'] = true;
        $_SESSION['idUsuario'] = $usuario_bd['idUsuario'];
        $_SESSION['nomeUsuario'] = $usuario_bd['nomeUsuario'];
        $_SESSION['email'] = $usuario_bd['email'];
        $_SESSION['telefone'] = $usuario_bd['telefone'];
        $_SESSION['endereco'] = $usuario_bd['endereco'];


        header('Location: ../../view/Home/home.php');
        exit();
    }else{
        $_SESSION['loginInvalido'] = true;
        
        header('Location: ../../view/Login/login.php');
        exit();
    }