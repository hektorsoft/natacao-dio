<?php
session_start();

function msg_error(string $menssagem) :void {

    $_SESSION['msg_error'] = $menssagem ; 

}

function obterMsgErro() : ?string {
    if(isset($_SESSION['msg_error']))
        return $_SESSION['msg_error'];
    return null;
}

function msg_sucesso(string $menssagem):void {

    $_SESSION['msg_sucesso'] = $menssagem;

}

function obterMsgSucesso() :?string {
    if(isset($_SESSION['msg_sucesso']))
        return $_SESSION['msg_sucesso'];
    return null;
}

function removerMsgErro() : void {
    if (isset($_SESSION['msg_error']))
        unset($_SESSION['msg_error']);

}

function removerMsgSucesso() : void {
    if(isset($_SESSION['msg_sucesso'])){
        unset($_SESSION['msg_sucesso']);}
}