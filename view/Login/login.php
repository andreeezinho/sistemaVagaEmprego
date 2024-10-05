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
    <link rel="stylesheet" href="../../assets/css/ajustes.css">
    <title>Login</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>
    
    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-sm-3 p-3 text-center position-absolute start-50 top-50 translate-middle">
                <?php
                    include('../../assets/alerts/loginAlert.php');
                    include('../../assets/alerts/cadastroAlert.php');
                ?>
                <div class="card">
                    <div class="card-body">
                        <i class="bi-person-circle display-4 text-primary"></i>
                        <h4 class="mt-5">Login</h4>

                        <form action="../../config/control/loginControl.php" method="POST">
                            <div class="form-floating mb-2">
                                <input type="text" name="cpf" id="cpf" class="form-control">
                                <label for="cpf">Insira seu CPF</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="password" name="senha" id="senha" class="form-control">
                                <label for="senha">Insira sua senha</label>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary mt-5">Confirmar</button>
                            </div>

                            <div class="text-center small mt-2">
                                <a href="../Cadastro/cadastro.php" class="link">Não possui conta? Cadastre-se aqui</a>
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