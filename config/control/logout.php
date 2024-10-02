<?php
    session_start();

    session_destroy();

    header('Location: ../../view/Home/home.php');
    exit();