<?php
    include('../../config/control/verificaAdm.php');
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
                            
                            <div class="form-floating mb-2">
                                <textarea name="descricaoVaga" id="descricaoVaga" class="form-control textarea"></textarea>
                                <label for="descricaoVaga">Insira a descrição da vaga</label>
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
                                    <option value="aberta">Aberta</option>
                                    <option value="espera">Em espera</option>
                                    <option value="fechada">Fechada</option>
                                </select>

                                <label for="statusVaga">Selecione o status da vaga</label>
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

            <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                <div class="col-12 col-md-8">
                    <h4>Nome da vaga</h4>
                    <h6>Tipo da vaga</h6>
                    <p class="mb-3">Carga horária: 8h</p>
                    <p class="text-muted mb-1"><i class="bi-clipboard"></i> Status: aberta</p>
                    <p class="text-muted mb-1"><i class="bi-person-fill"></i> Vagas disponíveis: 2</p>
                    <p class="text-muted mb-3"><i class="bi-people-fill"></i> Candidatos: 8</p>
                    <p class="text-muted mb-1"><i class="bi-calendar3"></i> Início: 24/09/24</p>
                    <p class="text-muted"><i class="bi-calendar3"></i> Encerramento: 08/10/24</p>
                    <p class="text-muted ">Aqui vai alguma descrição da vaga se tiver, se nao tiver tudo bem...</p>
                </div>
                
                <div class="col-12 col-md-4 text-center">
                    <a href="###" class="btn btn-success align-itens-end mb-1"><i class="bi-eye-fill"></i> Ver candidatos</a>
                    <a href="###" class="btn btn-primary align-itens-end mb-1"><i class="bi-pencil-fill"></i> Editar</a>
                    <a href="###" class="btn btn-danger align-itens-end mb-1"><i class="bi-trash-fill"></i> Excluir</a>
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