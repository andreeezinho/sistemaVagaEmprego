<?php
    function verificaHora($nome){
        date_default_timezone_set('America/Sao_Paulo');

        $hora = date('H');

        $primeiroNome = explode(' ', $nome);

        if($hora > '00' && $hora < '12'){
            $saudacao = '<i class="bi-sun-fill text-warning"></i> Bom dia, '.$primeiroNome[0];
        }

        if($hora > '12' && $hora < '18'){
            $saudacao = '<i class="bi-sunset-fill text-warning"></i> Boa tarde, '.$primeiroNome[0];
        }
        
        if($hora > '18'){
            $saudacao = '<i class="bi-moon-fill text-dark"></i> Boa noite, '.$primeiroNome[0];
        }

        return $saudacao;
    }   