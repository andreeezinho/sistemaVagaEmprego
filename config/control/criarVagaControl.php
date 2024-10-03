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
    $sql = "insert into vaga (nomeVaga, tipoVaga, cargaHoraria, descricaoVaga, quantidadeVaga, dataFechamento, statusVaga, dataAberta) 
            values ('$nomeVaga','$tipoVaga','$cargaHoraria','$descricaoVaga','$quantidadeVaga','$dataFechamento','$statusVaga',NOW())";

    //executar comando
    $query = mysqli_query($conexao, $sql);

    $sql = "select idVaga from vaga where nomeVaga = '$nomeVaga'";

    $query = mysqli_query($conexao, $sql);

    $verifica = mysqli_fetch_assoc($query);

    $idVaga = $verifica['idVaga'];

    $sql = "insert into administradorVaga (idAdministrador, idVaga) values ('$idAdministrador', '$idVaga')";

    if($conexao->query($sql) === TRUE){
        echo 'tudo ok?';
    }

    $conexao->close();
