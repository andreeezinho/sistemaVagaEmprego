<?php
    if(isset($_SESSION['mensagemHome'])):
?>
    <div class="toast fade show z-3 position-absolute margem start-50 translate-middle" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <label class="badge bg-warning me-1">!</label>
            <strong class="me-auto">Ops!</strong>

            <button class="btn-close" data-bs-dismiss="toast" aria-label="close"></button>
        </div>

        <div class="toast-body">
            <?=$_SESSION['mensagemHome'] ?>
        </div>
    </div>
<?php
    endif;

    unset($_SESSION['mensagemHome']);
?>