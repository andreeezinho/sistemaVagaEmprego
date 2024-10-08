<?php
    if(isset($_SESSION['cpfInvalido'])):
?>
    <div class="alert alert-danger alert-dismissible fade show">
        <p class="p-0 m-0"><?=$_SESSION['cpfInvalido'] ?></p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    endif;

    unset($_SESSION['cpfInvalido']);
?>

<!--  -->

<?php
    if(isset($_SESSION['cadastroInvalido'])):
?>
    <div class="alert alert-danger alert-dismissible fade show">
        <p class="p-0 m-0">Cadastro inválido, tente novamente...</p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    endif;

    unset($_SESSION['cadastroInvalido']);
?>

<?php
    if(isset($_SESSION['cadastroSucesso'])):
?>
    <div class="alert alert-success alert-dismissible fade show">
        <p class="p-0 m-0">Cadastro efetuado com sucesso! Faça login para continuar</p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
    endif;

    unset($_SESSION['cadastroSucesso']);
?>