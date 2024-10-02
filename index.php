<?php
    date_default_timezone_set('America/Sao_Paulo');

    session_start();

    include('./config/db.php');

    header('Location: ./view/Home');
    exit();
