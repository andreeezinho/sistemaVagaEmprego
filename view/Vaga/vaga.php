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
            <div class="col-12">
                <div class="my-4 border-bottom">
                    <div class="text-start">
                        <h3>
                            Nome da vaga
                            <a href="##" class="btn btn-primary float-sm-end"><i class="bi-box-arrow-up-right"></i> Candidatar-se</a>
                        </h3>
                        
                        <p class="mt-3"><i class="bi-calendar"></i> Publicação da vaga: 24/09/24</p>
                    </div>
                </div>

                <div class="my-4 border-bottom">
                    <p class="text-muted"><i class="bi-people-fill"></i> Vagas disponíveis: 2</p>
                    <p class="text-muted"><i class="bi-suitcase-lg-fill"></i> Tipo de vaga: CLT</p>
                    <p class="text-muted"><i class="bi-clock-fill"></i> Carga horária: 8h</p>
                </div>

                <div class="text-justify border-bottom pb-3 mb-4">
                    <h5 class="mb-4">Descrição da vaga</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quae, inventore at sit modi voluptates sequi dolorem libero, in consequuntur voluptatem rem ipsam, optio molestias. Blanditiis omnis voluptas voluptatem ducimus? Et voluptas vitae similique dicta tempora odio omnis unde delectus reiciendis in at dolores, doloremque dolorum architecto dolore praesentium ea, porro magni perferendis eveniet veniam, sint voluptates perspiciatis? Doloremque laborum nostrum temporibus blanditiis magni perferendis amet nulla labore earum? Tempore ducimus incidunt molestias laboriosam esse alias natus dolorem ut, ipsam mollitia rerum praesentium quam eius? Quia tempora quod aperiam dignissimos, vitae necessitatibus consequatur alias sunt animi molestias mollitia velit dolores molestiae aliquam exercitationem est laboriosam blanditiis vero. Fugit necessitatibus et nesciunt error perferendis nemo aliquid consequuntur voluptate, velit, dolorem accusamus quae expedita modi repudiandae, quos dicta quibusdam ea. Aperiam praesentium dolorem eos sit sint nemo, soluta deserunt veniam commodi minus? At nam officiis debitis laudantium natus iure ab, corporis cupiditate vitae. Fugiat nam quaerat quod sunt veritatis illum mollitia alias possimus, nobis quos dolor aperiam quas placeat modi sed eos corrupti numquam ratione odio voluptatibus eum suscipit repellendus pariatur. Voluptatum similique maiores magni corporis quibusdam! Mollitia repudiandae quod, natus at iste suscipit eligendi obcaecati incidunt praesentium quibusdam placeat quaerat nam cumque doloribus quasi sint quisquam deserunt fuga saepe veniam ex cum sit neque. Dolorum saepe similique esse possimus doloribus pariatur provident totam molestiae ab, fugit adipisci voluptatem odit reiciendis, recusandae ipsam impedit ducimus! Quae suscipit quas aliquid dolores velit saepe facere molestias rem! Ad, consequuntur id officia nam provident debitis exercitationem explicabo? Dolores, deserunt. Voluptate.</p>
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
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>