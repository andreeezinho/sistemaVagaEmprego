<?php
    session_start();

    include('../db.php');

    //valores dos inputs
    $cpfAdministrador = mysqli_real_escape_string($conexao, trim($_POST['cpfAdministrador']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));

    //comando sql
    $sql = "select * from administrador where cpfAdministrador = '$cpfAdministrador' and senha = MD5('$senha')";

    //executar comando
    $query = mysqli_query($conexao, $sql);

    //verificar
    $verifica = mysqli_num_rows($query);

    if($verifica == 1){
        $usuario_bd = mysqli_fetch_assoc($query);

        //sessao de logado
        $_SESSION['adm'] = true;
        $_SESSION['idAdministrador'] = $usuario_bd['idAdministrador'];
        $_SESSION['nomeAdministrador'] = $usuario_bd['nomeAdministrador'];
        $_SESSION['emailAdministrador'] = $usuario_bd['emailAdministrador'];

        header('Location: ../../view/Adm/criarVaga.php');
        exit();
    }else{
        $_SESSION['loginInvalido'] = true;
        
        header('Location: ../../view/Adm');
        exit();
    }