<?php
    session_start();

    include('../db.php');

    $idUsuario = $_GET['idUsuario'];
    $idVaga = $_GET['idVaga'];

    $nomeUsuario = mysqli_real_escape_string($conexao, $_POST['nomeUsuario']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $nomeAdministrador = mysqli_real_escape_string($conexao, $_POST['nomeAdministrador']);
    $data = mysqli_real_escape_string($conexao, $_POST['data']);

    if(empty($data)){
        $_SESSION['admErro'] = 'Você precisa definir uma data para confirmar entrevista';

        header(`Location: ../../view/Adm/criarEntrevistaControl.php?idUsuario=<?=$idUsuario ?>&idVaga=<?=$idVaga ?>`);
        exit();
    }