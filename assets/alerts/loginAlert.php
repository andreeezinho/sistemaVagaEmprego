<?php
    if(isset($_SESSION['loginInvalido'])):
?>
    <div class="alert alert-danger alert-dismissible fade show">
        <p class="p-0 m-0">Cadastro inválido, tente novamente...</p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['loginInvalido']);
?>

<!------------------->

<?php
    if(isset($_SESSION['erroLogin'])):
?>
    <div class="alert alert-warning alert-dismissible fade show">
        <p class="p-0 m-0">Para continuar, faça o login</p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['erroLogin']);
?>