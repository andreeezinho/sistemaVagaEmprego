<?php
    session_start();

    include('../db.php');
    
    //valores dos inputs
    $nomeUsuario = mysqli_real_escape_string($conexao, trim($_POST['nomeUsuario']));
    $cpf = mysqli_real_escape_string($conexao, trim($_POST['cpf']));
    $telefone = mysqli_real_escape_string($conexao, trim($_POST['telefone']));
    $email = mysqli_real_escape_string($conexao, trim($_POST['email']));
    $senha = mysqli_real_escape_string($conexao, trim($_POST['senha']));
    $endereco = mysqli_real_escape_string($conexao, trim($_POST['endereco']));
    $dataNascimento = mysqli_real_escape_string($conexao, trim($_POST['dataNascimento']));

    if(empty($cpf) || empty($nomeUsuario) || empty($email)){
        $_SESSION['cadastroInvalido'] = true;

        header('Location: ../../view/Cadastro/cadastro.php');
        exit();
    }

    //comando sql
    $sql = "select count(*) as verificaUsuario from usuario where cpf = '$cpf'";

    //executar
    $query = mysqli_query($conexao, $sql);

    //verificar se há algum usuario
    $row = mysqli_fetch_assoc($query);

    if($row['verificaUsuario'] != 0){
        //sessao cadastrado
        $_SESSION['cadastroInvalido'] = true;

        header('Location: ../../view/Cadastro/cadastro.php');
        exit();
    }
    //se nao, executa outro comando no sql

    $sql = "insert into usuario (nomeUsuario, cpf, telefone, email, senha, endereco, dataNascimento, dataCadastro) 
    values ('$nomeUsuario','$cpf','$telefone','$email',MD5('$senha'),'$endereco','$dataNascimento',NOW())";

    //valida comando
    if($conexao->query($sql) === TRUE){
        //sessao user cadastrado
        $_SESSION['cadastrado'] = true;
    }

    //encerrar conexao
    $conexao->close();

    header('Location: ../../view/Cadastro/formacoes.php');
    exit();