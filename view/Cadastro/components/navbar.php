<header>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
        <a class="navbar-brand" href="../Home/home.php">
            VAGAS DE EMPREGO
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu" aria-controls="menu" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="menu">
            <span class="navbar-nav mr-auto"></span>

            <div class="inline my-2 my-lg-0">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item mr-2">
                        <a class="nav-link" href="../Home/home.php"><i class="bi-house-fill"></i> Início</a>
                    </li>

                    <li class="nav-item mr-2">
                        <a class="nav-link" href="../Perfil/perfil.php"><i class="bi-file-person-fill"></i> Meu Perfil</a>
                    </li>

                    <!-- SE TIVER LOGADO, MOSTRAR BOTAO DE SAIR, SE NAO MOSTRAR BOTAO DE LOGIN -->
                    <?php
                        if(!isset($_SESSION['logado'])):
                    ?>
                        <li class="nav-item mr-2">
                            <a class="nav-link btn btn-sm btn-light text-primary" href="../Login/login.php"><i class="bi-person-fill"></i> Login</a>
                        </li>
                    <?php
                        endif;
                    ?>

                    <?php
                        if(isset($_SESSION['logado'])):
                    ?>
                        <li class="nav-item mr-2">
                            <a class="nav-link btn btn-sm btn-danger text-light" href=""><i class="bi-door-open-fill"></i> Sair</a>
                        </li>
                    <?php
                        endif;
                    ?>

                    
                </ul>
            </div>
        </div>
    </nav>
</header>