<?php
    session_start();
    require('../../config/db.php');
    include('../../config/control/verificaPerfil.php');
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
    <title>Login</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>
    
    <div class="container mt-5">
        <div class="row justify-content-center p-5">
            <?php
                include('../../assets/alerts/vagaAlert.php');

                //verifica se realmente existe vaga
                if(isset($_GET['idVaga'])){
                    //pegar id da vaga
                    $idVaga = $_GET['idVaga'];

                    //comando sql
                    $sql = "select * from vaga where idVaga = '$idVaga'";

                    //executar comando
                    $query = mysqli_query($conexao, $sql);

                    //verifica se consulta retorna alguma linha
                    if(mysqli_num_rows($query) > 0){
                        //pega valores do banco de dados
                        $info = mysqli_fetch_array($query);
            ?>
                <div class="col-12">
                    <div class="my-4 border-bottom">
                        <div class="text-start">
                            <h2>
                                <?=$info['nomeVaga'] ?>
                                <a href="./candidatar.php?idVaga=<?=$info['idVaga'] ?>" class="btn btn-primary float-sm-end"><i class="bi-box-arrow-up-right"></i> Candidatar-se</a>
                            </h2>
                            
                            <p class="mt-3"><i class="bi-calendar"></i> Publicação da vaga: <?=date('d/m/y', strtotime($info['dataAberta'])) ?></p>
                        </div>
                    </div>

                    <div class="my-4 border-bottom">
                        <p class="text-muted"><i class="bi-people-fill"></i> Vagas disponíveis: <?=$info['quantidadeVaga'] ?></p>
                        <p class="text-muted"><i class="bi-suitcase-lg-fill"></i> Tipo de vaga: <?=$info['tipoVaga'] ?></p>
                        <p class="text-muted"><i class="bi-clock-fill"></i> Carga horária: <?=$info['cargaHoraria'] ?></p>
                    </div>

                    <div class="text-justify border-bottom pb-3 mb-4">
                        <h5 class="mb-4">Descrição da vaga</h5>
                        <p><?=nl2br($info['descricaoVaga']) ?></p>
                    </div>

                    <div>
                        <h5 class="mb-4">Processo de Contratação</h5>
                        <ul>
                            <li>Cadastro</li>
                            <li>Aprovação</li>
                            <li>Entrevista</li>
                            <li>Análise</li>
                            <li>Contratação</li>
                        </ul>
                    </div>
                </div>
            <?php
                    }
                }else{
                    echo '
                        <div class="alert alert-primary"> 
                                <h2 class="text-center mb-5 py-4 my-auto">Ops! Vaga não existente...</h2>  
                                <h6 class="text-center mt-2 text-muted">Volte para a tela inicial e verifique a vaga</h6>  
                           </div>  
                    ';
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>