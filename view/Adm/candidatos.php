<!-- 
    select idUsuarioVaga, nomeUsuario, nomeVaga from usuarioVaga 
    inner join usuario on usuarioVaga.idUsuario = usuario.idUsuario 
    inner join vaga on usuarioVaga.idVaga = vaga.idVaga where idUsuarioVaga = 8;
-->
<?php
    session_start();

    include('../../config/db.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/ajustes.css">
    <title>Candidatos</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="mt-5 text-center">Candidatos</h2>
            <h6 class="text-muted text-center mb-5">Nome da vaga</h6>

            <div class="col-11 col-sm-12">

            <?php
                $idVaga = $_GET['idVaga'];

                //comando sql
                $sql = "select *, nomeUsuario, email, telefone, nomeVaga from usuarioVaga 
                inner join usuario on usuarioVaga.idUsuario = usuario.idUsuario 
                inner join vaga on usuarioVaga.idVaga = vaga.idVaga where vaga.idVaga = $idVaga";

                //executar
                $query = mysqli_query($conexao, $sql);

                //verificar
                if(mysqli_fetch_assoc($query) > 0){
                    //printar
                    foreach($query as $vaga){
            ?>
                <div class="card">
                    <div class="card-body">
                        <h3 class="mb-3"><i class="bi-person-fill"></i> <?=$vaga['nomeUsuario'] ?></h3>
                        <p class="text-muted mb-1 ml-1"><i class="bi-calendar3"></i> Candidatado em: <?=date('d/m/y', strtotime($vaga['dataInscrito'])) ?></p>
                        <p class="text-muted mb-1 ml-1"><i class="bi-envelope"></i> Email: <?=$vaga['email'] ?></p>
                        <p class="text-muted mb-0 ml-1"><i class="bi-telephone-fill"></i> <?=$vaga['telefone'] ?></p>
                    </div>

                    <div class="card-body text-center mt-0">
                        <a href="./candidatosDetalhes.php?idUsuario=<?=$vaga['idUsuario'] ?>" class="btn btn-success align-itens-end mb-1"><i class="bi-eye-fill"></i> Visualizar candidato</a>
                    </div>
                </div>

            <?php
                    }
                }else{
                    echo 'nao tem nenhum ainda';
                }
            ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>