<?php
    if(isset($_SESSION['vagaSucesso'])):
?>
    <div class="alert alert-success alert-dismissible fade show">
        <p class="p-0 m-0"><?=$_SESSION['vagaSucesso'] ?></p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['vagaSucesso']);
?>

<?php
    if(isset($_SESSION['vagaErro'])):
?>
    <div class="alert alert-danger alert-dismissible fade show">
        <p class="p-0 m-0"><?=$_SESSION['vagaErro'] ?></p>

        <button type="button" class="btn-close m-0 pt-2" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    
<?php
    endif;

    unset($_SESSION['vagaErro']);
?>