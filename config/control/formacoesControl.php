<?php
    session_start();

    //conexao com o banco de dados
    include('../db.php');

    //valores do form
    $idUsuario = $_SESSION['idUsuario'];
    $nomeInstituicao = mysqli_real_escape_string($conexao, trim($_POST['nomeInstituicao']));
    $curso = mysqli_real_escape_string($conexao, trim($_POST['curso']));
    $dataInicio = mysqli_real_escape_string($conexao, trim($_POST['dataInicio']));
    $dataTermino = mysqli_real_escape_string($conexao, trim($_POST['dataTermino']));

    //verificar se campo obrigatorio está vazio
    if(empty($nomeInstituicao) || empty($curso) || empty($dataInicio)){
        $_SESSION['perfilErro'] = 'Campo obrigatório está em branco';
        header('Location: ../../view/Perfil/formacoes.php');
        exit();
    }

    //comando sql
    $sql = "insert into formacao (idUsuario, nomeInstituicao, curso, dataInicio, dataTermino) 
            values ('$idUsuario','$nomeInstituicao','$curso','$dataInicio','$dataTermino')";

    //executa e valida comando

    if($conexao->query($sql) === TRUE){    
        //usando a sessao de erro, mas é pra se o cadastro for OK
        $_SESSION['perfilSucesso'] = 'Formação acadêmica cadastrada com sucesso!';

        //fechar conexao com banco de dados
        $conexao->close();

        header('Location: ../../view/Perfil/formacoes.php');
        exit();
    }
