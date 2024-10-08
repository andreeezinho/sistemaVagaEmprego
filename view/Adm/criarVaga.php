<?php
    include('../../config/control/verificaAdm.php');

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
    <title>Administrativo</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>
    
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-sm-8 mt-2">
                <?php
                    include('../../assets/alerts/admAlert.php');
                ?>

                <div class="card">
                    <div class="card-body text-center">
                        <i class="bi-window-plus display-4 text-primary"></i>
                        <h4 class="mt-5">Crie uma nova vaga</h4>
                        <p class="text-muted small">Insira as informações da vaga para publicar no site!</p>

                        <form action="../../config/control/criarVagaControl.php" method="POST">
                            <div class="form-floating mb-2">
                                <input type="text" name="nomeVaga" id="nomeVaga" class="form-control">
                                <label for="nomeVaga">Insira o nome da vaga</label>
                            </div>
        
                            <div class="form-floating mb-2">
                                <input type="text" name="tipoVaga" id="tipoVaga" class="form-control">
                                <label for="tipoVaga">Insira o tipo da vaga <span class="text-muted">(CLT, Estágio etc...)</span></label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="text" name="cargaHoraria" id="cargaHoraria" class="form-control">
                                <label for="cargaHoraria">Carga horária</label>
                            </div>
        
                            <div class="d-sm-flex justify-content-center">
                                <div class="col-sm-6 mx-sm-3 my-2">
                                    <div class="form-floating">
                                        <select class="form-control" name="quantidadeVaga" id="quantidadeVaga">
                                            <option disabled selected>0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <label for="quantidadeVaga">Vagas disponíveis</label>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 mx-sm-3 my-2">
                                    <div class="form-floating mb-2">
                                        <input type="date" name="dataFechamento" id="dataFechamento" class="form-control">
                                        <label for="dataFechamento">Data encerramento</label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-floating mb-2">
                                <select class="form-control" name="statusVaga" id="statusVaga">
                                    <option disabled selected>Não selecionado</option>
                                    <option value="Aberta">Aberta</option>
                                    <option value="Em espera">Em espera</option>
                                    <option value="Fechada">Fechada</option>
                                </select>

                                <label for="statusVaga">Selecione o status da vaga</label>
                            </div>

                            <div class="text-left">
                                <label class="text-muted ml-2 small" for="descricaoVaga">Insira a descrição da vaga</label>
                                <textarea name="descricaoVaga" id="descricaoVaga" class="form-control pb-5" style="height: 400px;"></textarea>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary mt-4"><i class="bi-plus"></i>Criar Vaga</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <h2 class="text-center mb-5 py-3 border-bottom mt-4">Vagas cadastradas</h2>

            <?php
                //comando sql
                $sql = "select *, nomeAdministrador from vaga inner join administrador on vaga.idAdministrador = administrador.idAdministrador;";

                //executa sql
                $query = mysqli_query($conexao, $sql);

                if(mysqli_fetch_assoc($query) > 0){
                    //printar as informacoes
                    foreach($query as $info){
            ?>

                <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                    <div class="col-12 col-md-8">
                        <h4><?=$info['nomeVaga'] ?></h4>
                        <h6><?=$info['tipoVaga'] ?></h6>
                        <p class="mb-3">Carga horária: <?=$info['cargaHoraria'] ?></p>
                        <p class="text-muted mb-3"><i class="bi-person-rolodex"></i> Criada por: <?=$info['nomeAdministrador'] ?></p>
                        <p class="text-muted mb-1"><i class="bi-clipboard"></i> Status: <?=$info['statusVaga'] ?></p>
                        <p class="text-muted mb-1"><i class="bi-person-fill"></i> Vagas disponíveis: <?=$info['quantidadeVaga'] ?></p>
                        <p class="text-muted mb-1"><i class="bi-calendar3"></i> Início: <?=date('d/m/y', strtotime($info['dataAberta'])) ?></p>
                        <p class="text-muted"><i class="bi-calendar3"></i> Encerramento: <?=date('d/m/y', strtotime($info['dataFechamento'] ))?></p>
                    </div>
                    
                    <div class="col-12 col-md-2 mx-auto text-center d-flex flex-column justify-content-start">
                        <a href="../../view/Adm/candidatos.php?idVaga=<?=$info['idVaga'] ?>" class="btn btn-success align-itens-end mb-1"><i class="bi-eye-fill"></i> Ver candidatos</a>
                        <a href="###" class="btn btn-primary align-itens-end mb-1"><i class="bi-pencil-fill"></i> Editar</a>
                        <a href="###" class="btn btn-danger align-itens-end mb-1"><i class="bi-trash-fill"></i> Excluir</a>
                    </div>
                </div>

            <?php
                    }
                }else{
                    echo 'nada ainda';
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