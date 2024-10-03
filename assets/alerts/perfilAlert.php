<?php
    if(isset($_SESSION['perfilMensagem'])):
?>
    <div class="alert alert-warning alert-dismissible fade show">
        <p class="p-0 m-0">Você precisa completar suas informações para continuar</p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['perfilMensagem']);
?>

<!------------------>
<?php
    if(isset($_SESSION['perfilSucesso'])):
?>
    <div class="alert alert-success alert-dismissible fade show">
        <p class="p-0 m-0"><?=$_SESSION['perfilSucesso'] ?></p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['perfilSucesso']);
?>

<?php
    if(isset($_SESSION['perfilErro'])):
?>
    <div class="alert alert-danger alert-dismissible fade show">
        <p class="p-0 m-0"><?=$_SESSION['perfilErro'] ?></p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['perfilErro']);
?>