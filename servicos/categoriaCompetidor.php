<?php

function definirCategoria(string $nome , string $idade) : ?string{
    if (ValidaNome($nome) and ValidaIdade($idade)){
        removerMsgErro();
        if ($idade>18){
            msg_sucesso("  Olá $nome, por sua idade ser de $idade anos, você está na categoria: Adulto!  ");
            return null;
        }
        elseif($idade<=18 and $idade>=13){
            msg_sucesso("  Olá $nome, por sua idade ser de $idade anos, você está na categoria: Adolescente!  ");
            return null;
        }
        elseif($idade >=6 and $idade <=12 ){
            msg_sucesso("Olá $nome, por sua idade ser de $idade anos, você está na categoria: Infatil!  ");
            return null;
        }
        else{
            msg_sucesso("  Olá $nome, por sua idade ser de $idade anos, você é muito novo para competir! ");
            return null;
        }
    }
    else{
        removerMsgSucesso();
        return obterMsgErro();
}
}