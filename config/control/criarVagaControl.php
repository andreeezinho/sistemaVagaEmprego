<?php
    session_start();

    include('../db.php');

    $idAdministrador = $_SESSION['idAdministrador'];
    //valores do form
    $nomeVaga = mysqli_real_escape_string($conexao, trim($_POST['nomeVaga']));
    $tipoVaga = mysqli_real_escape_string($conexao, trim($_POST['tipoVaga']));
    $cargaHoraria = mysqli_real_escape_string($conexao, trim($_POST['cargaHoraria']));
    $descricaoVaga = mysqli_real_escape_string($conexao, trim($_POST['descricaoVaga']));
    $quantidadeVaga = mysqli_real_escape_string($conexao, trim($_POST['quantidadeVaga']));
    $dataFechamento = mysqli_real_escape_string($conexao, trim($_POST['dataFechamento']));
    $statusVaga = mysqli_real_escape_string($conexao, trim($_POST['statusVaga']));

    //verificar input vazio
    if(empty($nomeVaga) || empty($tipoVaga) || empty($cargaHoraria) || empty($dataFechamento)){
        $_SESSION['admErro'] = 'Campo obrigatório está vazio, tente novamente'; 
        header('Location: ../../view/Adm/criarVaga.php');
        exit();
    }

    //comando sql
    $sql = "insert into vaga (idAdministrador, nomeVaga, tipoVaga, cargaHoraria, descricaoVaga, quantidadeVaga, dataFechamento, statusVaga, dataAberta) 
            values ('$idAdministrador','$nomeVaga','$tipoVaga','$cargaHoraria','$descricaoVaga','$quantidadeVaga','$dataFechamento','$statusVaga',NOW())";

    //executar comando
    if($conexao->query($sql) === TRUE){
        $_SESSION['admSucesso'] = 'Vaga foi criada com sucesso!';

        $conexao->close();

        header('Location: ../../view/Adm/criarVaga.php');
        exit();
    }else{
        $_SESSION['admErro'] = 'Erro ao criar vaga, tente novamente';
        
        $conexao->close();

        header('Location: ../../view/Adm/criarVaga.php');
        exit();
    }

    
