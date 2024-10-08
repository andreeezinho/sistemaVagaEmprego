<?php
    function verificaHora(){
        date_default_timezone_set('America/Sao_Paulo');

        $hora = date('H');

        if($hora > '00' && $hora < '12'){
            $saudacao = '<i class="bi-sun-fill text-warning"></i> Bom dia, ';
        }
        if($hora > '12' && $hora < '18'){
            $saudacao = '<i class="bi-sunset-fill text-warning"></i> Boa tarde, ';
        }
        if($hora > '18'){
            $saudacao = '<i class="bi-moon-fill text-dark"></i> Boa noite, ';
        }

        return $saudacao;
    }   