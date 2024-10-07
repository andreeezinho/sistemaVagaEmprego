<?php
    session_start();

    include('../../config/db.php');

    $idUsuario = $_GET['idUsuario'];
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
    <title>Candidatos - Detalhes</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-11 col-sm-12">
                <a href="./candidatos.php?idVaga=<?=$idVaga ?>" class="btn btn-primary mt-2 mt-sm-0 mb-3"><i class="bi-arrow-left"></i> Voltar</a>
                
                <div class="card">
                    <card class="card-body">
                        <?php
                            //comando sql
                            $sql = "select * from usuario where idUsuario = '$idUsuario'";

                            //executar
                            $query = mysqli_query($conexao, $sql);

                            //verificar
                            if(mysqli_num_rows($query) > 0){
                                //imprimir
                                $usuario = mysqli_fetch_array($query);
                        ?>
                            <h2 class="border-bottom pb-2 d-flex flex-column flex-sm-row">
                                <?=$usuario['nomeUsuario'] ?>
                                
                                <a href="###" class="btn btn-success my-1 ml-sm-auto"><i class="bi-bookmark-plus"></i> Marcar Entrevista</a>
                                <button type="button" class="btn btn-primary my-1 ml-sm-2"><i class="bi-download"></i> Baixar CV</button>
                            </h2>

                            <div class="mt-3">
                                <h4 class="text-primary mb-3">Informações</h4>

                                <p class="text-muted mt-2"><i class="bi-credit-card-2-front"></i> CPF: <?=$usuario['cpf'] ?></p>
                                <p class="text-muted mt-2"><i class="bi-envelope"></i> Email: <?=$usuario['email'] ?></p>
                                <p class="text-muted mt-2"><i class="bi-telephone"></i> Telefone: <?=$usuario['telefone'] ?></p>
                                <p class="text-muted mt-2"><i class="bi-calendar"></i> Data de Nascimento: <?=$usuario['dataNascimento'] ?></p>
                                <p class="text-muted mt-2"><i class="bi-house"></i> Endereço: <?=$usuario['endereco'] ?></p>
                            </div>


                        <div class="mt-5">
                            <h4 class="text-primary">Formação Acadêmica</h4>

                            <?php
                                $sql = "select * from formacao where idUsuario = '$idUsuario'";

                                $query = mysqli_query($conexao, $sql);

                                //verificar
                                if(mysqli_num_rows($query) > 0){
                                    //imprimir
                                    foreach($query as $formacao){
                            ?>
                                <div class="border rounded p-3 mb-3">
                                    <div class="col-12 col-md-8">
                                        <h4><?=$formacao['nomeInstituicao'] ?></h4>
                                        <p class="text-muted mt-3"><b>Curso: </b><?=$formacao['curso'] ?></p>
                                        <p class="text-muted mt-3"><i class="bi-calendar3"></i> Data de início: <?=date('d/m/y', strtotime($formacao['dataInicio'])) ?></p>
                                        <p class="text-muted"><i class="bi-calendar3"></i> Data de Término: <?=date('d/m/y', strtotime($formacao['dataTermino'])) ?></p>
                                    </div>
                                </div>
                            <?php
                                    }
                                }else{
                                    echo 'Não há formações';
                                }
                            ?>
                        </div>

                        <div class="mt-5">
                            <h4 class="text-primary">Experiências Profissionais</h4>

                            <?php
                                $sql = "select * from experiencia where idUsuario = '$idUsuario'";

                                $query = mysqli_query($conexao, $sql);

                                if(mysqli_num_rows($query) > 0){
                                    foreach($query as $experiencia){
                            ?>
                                <div class="border rounded p-3 mb-3">
                                    <div class="col-12 col-md-8">
                                        <h4><?=$experiencia['nomeEmpresa'] ?></h4>
                                        <p class="text-muted mt-3"><b>Cargo: </b><?=$experiencia['cargo'] ?></p>
                                        <p class="text-muted mt-3"><i class="bi-calendar3"></i> Contratação: <?=date('d/m/y', strtotime($experiencia['dataContratado'])) ?></p>
                                        <p class="text-muted"><i class="bi-calendar3"></i> Data de Saída: <?=date('d/m/y', strtotime($experiencia['dataDespedido'])) ?></p>
                                    </div>
                                </div>
                            <?php
                                    }
                                }else{
                                    echo 'Não há experiências profissionais';
                                }
                            ?>
                        </div>

                        <?php
                            }else{
                                echo 'Usuário não existe';
                            }
                        ?>
                    </card>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>

