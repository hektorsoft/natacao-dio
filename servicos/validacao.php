<?php


function ValidaNome(string $nome) :bool {

    if (empty($nome)){
        msg_error("  Erro!!! O Nome não pode estar vázio.  ");        
        return false;
    }
    elseif (strlen($nome) <= 3){
        msg_error( "  Erro!!! O nome deve possuir ao menos 3 dígitos.  ");        
        return false;
    }
    elseif (strlen($nome) > 30) {
        msg_error("  Erro!!! O nome não deve possuir mais do que 30 dígitos.  ");       
        return false;
    }
    return true;
}

function ValidaIdade(string $idade) :bool {
    if (empty($idade)){
     msg_error("  Erro!!! A idade não pode estar vázia.  ");        
        return false;
    }
    
    
    elseif (!is_numeric($idade)){
    
        msg_error("  Erro!!! O campo idade deve ser preenchido com um valor numérico.  ");        
        return false;
    }
    return true;
}