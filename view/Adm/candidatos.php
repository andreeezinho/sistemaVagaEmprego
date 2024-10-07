<!-- 
    select idUsuarioVaga, nomeUsuario, nomeVaga from usuarioVaga 
    inner join usuario on usuarioVaga.idUsuario = usuario.idUsuario 
    inner join vaga on usuarioVaga.idVaga = vaga.idVaga where idUsuarioVaga = 8;
-->
<?php
    session_start();

    include('../../config/db.php');

    $idVaga = $_GET['idVaga'];
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
    <?php
        include('./components/navbar.php');
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <h2 class="mt-5 pt-3">
                <a href="./criarVaga.php" class="btn btn-primary float-left"><i class="bi-arrow-left"></i> Voltar</a>
                <h2 class="text-center border-bottom pb-2">Candidatos</h2>
            </h2>
            

            <?php
                //titulo do nome da vaga
                
                //comando sql
                $sql = "select nomeVaga from vaga where idVaga = '$idVaga'";

                //executar
                $query = mysqli_query($conexao, $sql);

                //verificar
                if(mysqli_num_rows($query) != 0){
                    $nomeVaga = mysqli_fetch_array($query);
            ?>
                <h4 class="text-primary text-center mb-5">Vaga: <?=$nomeVaga['nomeVaga'] ?></h4>
            <?php
                }else{
                    echo "Nome da vaga não encontrada...";
                }
            ?>

            <div class="col-11 col-sm-12">

            <?php
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
                <div class="card mb-2">
                    <div class="card-body">
                        <h3 class="mb-3"><i class="bi-person-fill"></i> <?=$vaga['nomeUsuario'] ?></h3>
                        <p class="text-muted mb-1 ml-1"><i class="bi-calendar3"></i> Candidatado em: <?=date('d/m/y', strtotime($vaga['dataInscrito'])) ?></p>
                        <p class="text-muted mb-1 ml-1"><i class="bi-envelope"></i> Email: <?=$vaga['email'] ?></p>
                        <p class="text-muted mb-0 ml-1"><i class="bi-telephone-fill"></i>Telefone:  <?=$vaga['telefone'] ?></p>
                    </div>

                    <div class="card-body text-center mt-0">
                        <a href="./candidatosDetalhes.php?idUsuario=<?=$vaga['idUsuario'] ?>&idVaga=<?=$idVaga ?>" class="btn btn-success align-itens-end mb-1"><i class="bi-eye-fill"></i> Visualizar candidato</a>
                    </div>
                </div>

            <?php
                    }
                }else{
                    echo '
                            <div class="card mb-2">
                                <div class="card-body">
                                    <h2 class="mb-3">Não há usuários candidatados</h3>
                                </div>

                            </div>
                        ';
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