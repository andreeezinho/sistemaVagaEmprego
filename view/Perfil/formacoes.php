<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./AJUSTES.css">
    <title>Formação Acadêmica</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>

    <div class="container mt-5">
        <div class="row justify-content-center pt-3">
            <div class="col-sm-6 mt-5">
                    <?php
                        include('../../assets/alerts/perfilAlert.php');
                    ?>
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="bi-mortarboard-fill display-4 text-primary"></i>
                            <h4 class="mt-5">Formação Acadêmica</h4>
                            <p class="text-muted small">Insira as informações da sua instituição para continuar</p>

                            <form action="../../config/control/formacoesControl.php" method="POST">
                                <div class="form-floating mb-2">
                                    <input type="text" name="nomeInstituicao" id="nomeInstituicao" class="form-control">
                                    <label for="nomeInstituicao">Insira o nome da instituição</label>
                                </div>
            
                                <div class="form-floating mb-2">
                                    <input type="text" name="curso" id="curso" class="form-control">
                                    <label for="curso">Insira o curso</label>
                                </div>
            
                                <div class="d-md-flex justify-content-center">
                                    <div class="col-sm-6 mx-sm-3">
                                        <div class="form-floating mb-2">
                                            <input type="date" name="dataInicio" id="dataInicio" class="form-control">
                                            <label for="dataInicio">Data de início</label>
                                        </div>
                                    </div>
        
                                    <div class="col-sm-6 mx-sm-3">
                                        <div class="form-floating mb-0">
                                            <input type="date" name="dataTermino" id="dataTermino" class="form-control">
                                            <label for="dataTermino">Data de conclusão</label>
                                        </div>
                                        <span class="text-muted small mt-0">Deixar em branco se nao foi concluído</span>
                                    </div>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-warning mt-4"><i class="bi-plus"></i> Adicionar</button>
                                    <a href="./experiencias.php" class="btn btn-primary mt-4">Continuar <i class="bi-arrow-right"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
            </div>
        </div> 
        
        <div class="row justify-content-center">
            <h2 class="text-center my-5 py-3 border-top border-bottom">Suas formações</h2>
            
            <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                <div class="col-12 col-md-8">
                    <h4>Nome da instituição</h4>
                    <p class="text-muted mt-3">Curso que a pessoa fez</p>
                    <p class="text-muted mt-3"><i class="bi-calendar3"></i> Início: 24/09/24</p>
                    <p class="text-muted"><i class="bi-calendar3"></i> Fim: 24/09/24</p>
                </div>
                
                <div class="col-12 col-md-4 text-end">
                    <a href="###" class="btn btn-primary align-itens-end"><i class="bi-pencil"></i> Editar</a>
                    <a href="###" class="btn btn-danger align-itens-end"><i class="bi-trash"></i> Editar</a>
                </div>
            </div>

            <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                <div class="col-12 col-md-8">
                    <h4>Nome da instituição</h4>
                    <p class="text-muted mt-3">Curso que a pessoa fez</p>
                    <p class="text-muted mt-3"><i class="bi-calendar3"></i> Início: 24/09/24</p>
                    <p class="text-muted"><i class="bi-calendar3"></i> Fim: 24/09/24</p>
                </div>
                
                <div class="col-12 col-md-4 text-end">
                    <a href="###" class="btn btn-primary align-itens-end"><i class="bi-pencil"></i> Editar</a>
                    <a href="###" class="btn btn-danger align-itens-end"><i class="bi-trash"></i> Editar</a>
                </div>
            </div>

            <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                <div class="col-12 col-md-8">
                    <h4>Nome da instituição</h4>
                    <p class="text-muted mt-3">Curso que a pessoa fez</p>
                    <p class="text-muted mt-3"><i class="bi-calendar3"></i> Início: 24/09/24</p>
                    <p class="text-muted"><i class="bi-calendar3"></i> Fim: 24/09/24</p>
                </div>
                
                <div class="col-12 col-md-4 text-end">
                    <a href="###" class="btn btn-primary align-itens-end"><i class="bi-pencil"></i> Editar</a>
                    <a href="###" class="btn btn-danger align-itens-end"><i class="bi-trash"></i> Editar</a>
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