<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../../assets/css/ajustes.css">
    <title>Cadastro</title>
</head>
<body>
    <?php
        session_start();
        
        include('./components/navbar.php');
    ?>
    
    <div class="container mt-5">
        <div class="row justify-content-center pt-5">
            <div class="col-md-5 p-3 text-center">
                <?php 
                    include('../../assets/alerts/cadastroAlert.php');
                ?>

                <div class="card">
                    <div class="card-body">
                        <i class="bi-person-fill-add display-4 text-primary"></i>
                        <h4 class="mt-5">Cadastro</h4>

                        <form action="../../config/control/cadastroControl.php" method="POST">
                            <div class="form-floating mb-2">
                                <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control">
                                <label for="nomeUsuario">Insira seu nome</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="text" name="cpf" id="cpf" class="form-control">
                                <label for="cpf">Insira seu CPF</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="text" name="telefone" id="telefone" class="form-control">
                                <label for="telefone">Insira seu telefone</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="email" name="email" id="email" class="form-control">
                                <label for="email">Insira seu email</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="password" name="senha" id="senha" class="form-control">
                                <label for="senha">Crie sua senha</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="text" name="endereco" id="endereco" class="form-control">
                                <label for="endereco">Endereço (Rua, bairro, nº)</label>
                            </div>

                            <div class="form-floating mb-2">
                                <input type="date" name="dataNascimento" id="dataNascimento" class="form-control">
                                <label for="dataNascimento">Insira sua data de nascimento</label>
                            </div>

                            <div>
                                <button type="submit" class="btn btn-primary mt-5">Continuar</button>
                            </div>

                            <div class="text-center small mt-2">
                                <a href="../Login/login.php" class="link">Já tem uma conta? Faça login</a>
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