<?php
    if(isset($_SESSION['admSucesso'])):
?>
    <div class="alert alert-success alert-dismissible fade show">
        <p class="p-0 m-0"><?=$_SESSION['admSucesso'] ?></p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['admSucesso']);
?>

<?php
    if(isset($_SESSION['admErro'])):
?>
    <div class="alert alert-danger alert-dismissible fade show">
        <p class="p-0 m-0"><?=$_SESSION['admErro'] ?></p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['admErro']);
?>