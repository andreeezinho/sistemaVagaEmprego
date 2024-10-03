<?php
    session_start();

    //conexao com o banco de dados
    include('../db.php');

    //valores do form
    $idUsuario = $_SESSION['idUsuario'];
    $nomeEmpresa = mysqli_real_escape_string($conexao, trim($_POST['nomeEmpresa']));
    $cargo = mysqli_real_escape_string($conexao, trim($_POST['cargo']));
    $dataContratado = mysqli_real_escape_string($conexao, trim($_POST['dataContratado']));
    $dataDespedido = mysqli_real_escape_string($conexao, trim($_POST['dataDespedido']));

    //verificar se campo obrigatorio está vazio
    if(empty($nomeEmpresa) || empty($cargo) || empty($dataContratado)){
        $_SESSION['perfilErro'] = 'Campo obrigatório está em branco';
        header('Location: ../../view/Perfil/experiencias.php');
        exit();
    }

    //comando sql
    $sql = "insert into experiencia (idUsuario, nomeEmpresa, cargo, dataContratado, dataDespedido) 
            values ('$idUsuario','$nomeEmpresa','$cargo','$dataContratado','$dataDespedido')";

    //executa e valida comando

    if($conexao->query($sql) === TRUE){    
        //usando a sessao de erro, mas é pra se o cadastro for OK
        $_SESSION['perfilSucesso'] = 'Experiência profissional cadastrada com sucesso!';

        //fechar conexao com banco de dados
        $conexao->close();

        header('Location: ../../view/Perfil/experiencias.php');
        exit();
    }
