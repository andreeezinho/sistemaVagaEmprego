<?php
    if(isset($_SESSION['logado'])){
        //id usuario
        $idUsuario = $_SESSION['idUsuario'];

        //executar comando sql para verificar 
        $sql = "select count(idFormacao) as quant, idUsuario from formacao where idUsuario = '$idUsuario'";

        $query = mysqli_query($conexao, $sql);

        $verifica = mysqli_fetch_assoc($query);

        if($verifica['quant'] != 0){
            $_SESSION['perfilCompleto'] = true;
        }
    }

    if(!isset($_SESSION['logado'])){
        $_SESSION['erroLogin'] = true;
        header('Location: ../../view/Login/login.php');
        exit();
    }

    if(!isset($_SESSION['perfilCompleto'])){
        $_SESSION['perfilMensagem'] = true;
        header('Location: ../../view/Perfil/formacoes.php');
        exit();
    }

    