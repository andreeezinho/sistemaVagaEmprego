<?php
    //pegar id usuario e vaga
    $idUsuario = $_SESSION['idUsuario'];
    $idVaga = $_GET['idVaga'];

    //comando para verificar
    $sql = "select count(*) as verifica from usuarioVaga where idUsuario = '$idUsuario' and idVaga = '$idVaga'";

    //executar
    $query = mysqli_query($conexao, $sql);

    //resultado
    $result = mysqli_fetch_assoc($query);

    //verificar se usuario ja se cadastrou
    if($result['verifica'] != 0){
        $_SESSION['vagaErro'] = 'Ops! Você já está cadastrado na vaga, verifique suas vagas';

        //fechar conexao
        $conexao->close();

        header("Location: ../../view/Vaga/vaga.php?idVaga=$idVaga");
        exit();
    }

    //comando sql
    $sql = "insert into usuarioVaga (idUsuario, idVaga) values ($idUsuario, $idVaga)";

    //executar query
    $query = mysqli_query($conexao, $sql);

    //verificar
    if(mysqli_affected_rows($conexao)){
        $_SESSION['vagaSucesso'] = 'Você se candidatou a vaga com sucesso, espere a marcação da entrevista';

        //fechar conexao
        $conexao->close();

        header("Location: ../../view/Vaga/vaga.php?idVaga=$idVaga");
        exit();
    }else{
        $_SESSION['vagaErro'] = 'Erro ao se candidatar à vaga, tente novamente';

        //fechar conexao
        $conexao->close();

        header("Location: ../../view/Vaga/vaga.php?idVaga=$idVaga");
        exit();
    }   