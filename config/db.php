<?php
    //fuso horário
    date_default_timezone_set('America/Sao_Paulo');

    //definindo info do banco de dados
    define('HOST', '193.203.175.34');
    define('USUARIO', 'u550172764_root');
    define('SENHA', 'Bombomgamer1!');
    define('DB', 'u550172764_comercialBanco');

    //conexao com o banco de dados
    $conexao = mysqli_connect(HOST,USUARIO,SENHA,DB) or die ('Não foi possível estabelecer conexão com o banco de dados');