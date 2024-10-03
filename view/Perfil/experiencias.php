<?php
    session_start();

    require('../../config/db.php');
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
    <title>Experiência Profissional</title>
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
                        <i class="bi-person-workspace display-4 text-primary"></i>
                        <h4 class="mt-5">Experiência Profissional</h4>
                        <p class="text-muted small">Insira as informações da sua experiência de trabalho</p>

                        <form action="../../config/control/experienciasControl.php" method="POST">
                            <div class="form-floating mb-2">
                                <input type="text" name="nomeEmpresa" id="nomeEmpresa" class="form-control">
                                <label for="nomeEmpresa">Insira o nome da empresa</label>
                            </div>
        
                            <div class="form-floating mb-2">
                                <input type="text" name="cargo" id="cargo" class="form-control">
                                <label for="cargo">Insira o cargo</label>
                            </div>
        
                            <div class="d-sm-flex justify-content-center">
                                <div class="col-sm-6 mx-sm-3">
                                    <div class="form-floating mb-2">
                                        <input type="date" name="dataContratado" id="dataContratado" class="form-control">
                                        <label for="dataContratado">Data de início</label>
                                    </div>
                                </div>
    
                                <div class="col-sm-6 mx-sm-3">
                                    <div class="form-floating mb-2">
                                        <input type="date" name="dataDespedido" id="dataDespedido" class="form-control">
                                        <label for="dataDespedido">Data Final</label>
                                    </div>
                                    <span class="text-muted small mt-0">Deixar em branco se ainda trabalha nesta empresa</span>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-warning mt-4"><i class="bi-plus"></i> Adicionar</button>
                                <button type="submit" class="btn btn-primary mt-4">Concluir <i class="bi-arrow-right"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
        
        <div class="row justify-content-center">
            <h2 class="text-center my-5 py-3 border-top border-bottom">Suas experiências</h2>
            
            <?php
                $idUsuario = $_SESSION['idUsuario'];

                //comando sql
                $sql = "select * from experiencia where idUsuario = '$idUsuario'";

                //executar comando
                $query = mysqli_query($conexao, $sql);

                //verifica se há alguma linha
                if(mysqli_num_rows($query) > 0){
                    //printar as experiencias
                    foreach($query as $info){
            ?>
                <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                    <div class="col-12 col-md-8">
                        <h4><?=$info['nomeEmpresa'] ?></h4>
                        <p class="text-muted mt-3"><b>Cargo: </b><?=$info['cargo'] ?></p>
                        <p class="text-muted mt-3"><i class="bi-calendar3"></i> <?=date('d/m/y', strtotime($info['dataContratado'])) ?></p>
                        <p class="text-muted"><i class="bi-calendar3"></i> <?=date('d/m/y', strtotime($info['dataDespedido'])) ?></p>
                    </div>
                    
                    <div class="col-12 col-md-4 text-end">
                        <a href="###" class="btn btn-primary align-itens-end"><i class="bi-pencil"></i> Editar</a>
                        <a href="###" class="btn btn-danger align-itens-end"><i class="bi-trash"></i> Editar</a>
                    </div>
                </div>
            <?php
                    }
                }else{
                    echo '
                            <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                                <div class="col-12 col-md-8">
                                    <h4>Você ainda não tem experiências profissionais cadastradas</h4>
                                    <p class="mt-3">Cadastre-as para poder ver e editar aqui</p>
                                </div>
                            </div>
                        ';
                }
            ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>