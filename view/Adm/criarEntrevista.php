<?php
    session_start();

    include('../../config/db.php');

    $idUsuario = $_GET['idUsuario'];
    $idVaga = $_GET['idVaga'];
    $nomeAdministrador = $_SESSION['nomeAdministrador']
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
    <title>Marcar Entrevista</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>

    <div class="container">
        <div class="row pt-5 justify-content-center">
            <div class="col-11 col-sm-4 mt-5 position-absolute start-50 top-50 translate-middle">
                <div class="card">
                    <?php
                        include('../../assets/alerts/admAlert.php');
                    ?>
                    <div class="card-body">
                        <h3 class="text-center">Marcar Entrevista</h3>
                        <p class="text-center small text-muted">Selecione as informações para a marcação de entrevista</p>

                        <form action="../../config/control/criarEntrevistaControl.php?idUsuario=<?=$idUsuario ?>&idVaga=<?=$idVaga ?>" method="POST">
                            <?php
                                $sql = "select * from usuario where idUsuario = '$idUsuario'";

                                $query = mysqli_query($conexao, $sql);

                                if(mysqli_num_rows($query)){
                                    $usuario = mysqli_fetch_array($query);
                            ?>
                                <div class="form-floating mb-2">
                                    <input type="text" name="nomeUsuario" value="<?=$usuario['nomeUsuario'] ?>" id="nomeUsuario" class="form-control" disabled>
                                    <label for="nomeUsuario">Candidato </label>
                                </div>

                                <div class="form-floating mb-2">
                                    <input type="text" name="email" value="<?=$usuario['email'] ?>" id="email" class="form-control" disabled>
                                    <label for="email">Email </label>
                                </div>
                            <?php
                                }else{
                                    echo 'Erro ao encontrar usuário';
                                }
                            ?>

                            <div class="form-floating mb-2">
                                <input type="text" name="nomeAdministrador" value="<?=$nomeAdministrador ?>" id="nomeAdministrador" class="form-control" disabled>
                                <label for="nomeAdministrador">Nome entrevistador</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="datetime-local" name="data" id="data" class="form-control">
                                <label for="data">Data da entrevista </label>
                            </div>

                            <div class="form-floating mb-2 text-center mt-5">
                                <button type="submit" class="btn btn-success">Confirmar</button>
                            </div>
                        </form>
                    </div>
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