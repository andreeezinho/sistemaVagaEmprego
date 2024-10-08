<?php
    session_start();

    include('../db.php');

    $idAdministrador = $_SESSION['idAdministrador'];
    $idUsuario = $_GET['idUsuario'];
    $idVaga = $_GET['idVaga'];

    $nomeUsuario = mysqli_real_escape_string($conexao, $_POST['nomeUsuario']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $nomeAdministrador = mysqli_real_escape_string($conexao, $_POST['nomeAdministrador']);
    $data = mysqli_real_escape_string($conexao, $_POST['data']);

    if(empty($data)){
        $_SESSION['admErro'] = 'Campo de data é obrigatório';

        header('Location: ../../view/Adm/criarEntrevista.php?idUsuario='.$idUsuario.'&idVaga='.$idVaga);
        exit();
    }

    $sql = "select count(*) as verifica from entrevista where idVaga = '$idVaga' and idUsuario = '$idUsuario'";

    $query = mysqli_query($conexao, $sql);

    $verifica = mysqli_fetch_assoc($query);

    if($verifica['verifica'] > 0){
        $_SESSION['admErro'] = 'Candidato já tem entrevista agendada';

        header('Location: ../../view/Adm/criarEntrevista.php?idUsuario='.$idUsuario.'&idVaga='.$idVaga);
        exit();
    }

    $sql = "insert into entrevista (idVaga, idUsuario, idAdministrador, dataHora)
            values ('$idVaga','$idUsuario','$idAdministrador','$data')";

    $query = mysqli_query($conexao, $sql);

    if(mysqli_affected_rows($conexao)){
        $_SESSION['admSucesso'] = 'Entrevista agendada com sucesso!';

        header('Location: ../../view/Adm/criarEntrevista.php?idUsuario='.$idUsuario.'&idVaga='.$idVaga);
        exit();
    }else{
        $_SESSION['admErro'] = 'Erro ao agendar entrevista';

        header('Location: ../../view/Adm/criarEntrevista.php?idUsuario='.$idUsuario.'&idVaga='.$idVaga);
        exit();
    }