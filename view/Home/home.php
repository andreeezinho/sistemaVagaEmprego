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
    <title>Home</title>
</head>
<body>
    <?php
        include('./components/navbar.php');
    ?>

    <div id="carrossel" class="carousel slide carousel-fade" data-ride="carousel">
        
        <!-- botoes -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carrossel" 
            data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 0"></button>

            <button type="button" data-bs-target="#carrossel" data-bs-slide-to="1" 
            arial-label="Slide 1"></button>

            <button type="button" data-bs-target="#carrossel" data-bs-slide-to="2" 
            arial-label="Slide 2"></button>
        </div>

        <!-- imagens -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../../assets/img/carrossel/4.png" alt="imagem 1" class="d-block w-100 carrossel">

                <!-- legenda -->
                 <div class="carousel-caption d-md-block text-light">
                    <h3>Primeiro Slide</h3>
                    <p>Esse é o primeiro slide</p>
                 </div>
            </div>

            <div class="carousel-item">
                <img src="../../assets/img/carrossel/2.png" alt="imagem 2" class="d-block w-100  carrossel">

                <!-- legenda -->
                 <div class="carousel-caption d-md-block">
                    <h3>Segundo Slide</h3>
                    <p>Esse é o segundo slide</p>
                 </div>
            </div>

            <div class="carousel-item">
                <img src="../../assets/img/carrossel/3.png" alt="imagem 3" class="d-block w-100 carrossel">

                <!-- legenda -->
                 <div class="carousel-caption d-md-block">
                    <h3>terceiro Slide</h3>
                    <p>Esse é o terceiro slide</p>
                 </div>
            </div>
        </div>

        <!-- botoes de navegacao -->
         <button class="carousel-control-prev" type="button"
         data-bs-target="#carrossel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button"
         data-bs-target="#carrossel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

     <div class="container">
        <?php
            include('../../assets/alerts/homeAlert.php');
        ?>
        <!-- CARDSSSSS -->
        <div class="row justify-content-center p-5 my-5 text-center">
            <div class="col-md-4 mb-5">
                <img src="../../assets/img/lojasicon.png" alt="" class="rounded-circle mb-3" width="140" height="140">
                <h5>NOME DO COMERCIAL</h5>
                <p>ENDEREÇO AQUI</p>
                <a href="###" class="btn btn-primary"><i class="bi-phone"></i> Entre em contato</a>
            </div>

            <div class="col-md-4 mb-5">
                <img src="../../assets/img/lojasicon.png" alt="" class="rounded-circle mb-3" width="140" height="140">
                <h5>NOME DO COMERCIAL</h5>
                <p>ENDEREÇO AQUI</p>
                <a href="###" class="btn btn-primary"><i class="bi-phone"></i> Entre em contato</a>
            </div>

            <div class="col-md-4 mb-5">
                <img src="../../assets/img/lojasicon.png" alt="" class="rounded-circle mb-3" width="140" height="140">
                <h5>NOME DO COMERCIAL</h5>
                <p>ENDEREÇO AQUI</p>
                <a href="###" class="btn btn-primary"><i class="bi-phone"></i> Entre em contato</a>
            </div>
        </div>

        <!-- VAGASSSSSSSS -->
         <div class="row justify-content-center">
            <h2 class="text-center mb-5 py-3 border-top border-bottom">Nossas Vagas</h2>

            <div class="col-11 col-md-12 d-md-flex border rounded p-3 mb-3">
                <div class="col-12 col-md-8">
                    <h4>Exemplo de vaga disponível</h4>
                    <h6>Loja que vai ser</h6>
                    <p class="mb-2">Carga horária</p>
                    <p class="text-muted">Aqui vai alguma descrição da vaga se tiver, se nao tiver tudo bem...</p>
                    <p class="text-muted mt-4"><i class="bi-calendar3"></i> 24/09/24</p>
                </div>
                
                <div class="col-12 col-md-4 text-end">
                    <a href="../Vaga/vaga.php" class="btn btn-primary align-itens-end"><i class="bi-box-arrow-up-right"></i> Candidatar-se</a>
                </div>
            </div>
     </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>