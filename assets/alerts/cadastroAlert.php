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