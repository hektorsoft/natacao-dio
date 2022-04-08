<?php
include "servicos/messagemSessao.php";
?>
<html>
<head>
    <title>Competição de Natação</title>
</head>    
<body>
<h3>Olá, Digite seu nome e idade</h3>
<form class="form-signin" action="info.php" method="post">
    <input type="text"  name="nome"     placeholder="Digite Seu Nome"    required autofocus><br><br>
    <input type="number"  name="idade"    placeholder="Digite Sua Idade"   required autofocus><br><br>
    <button type="submit" >Enviar</button> <br><br><br>

    <h3><?php 
    $msg_sucesso = isset($_SESSION ['msg_sucesso']) ? $_SESSION['msg_sucesso'] : ' ';
    if(!empty($msg_sucesso))
    {
        echo($msg_sucesso);
    };

    $msg_error = isset($_SESSION ['msg_error']) ? $_SESSION['msg_error'] : '';
    if(!empty($msg_error))
    {
        echo($msg_error);
    }
    ?></h3>
</form>
</body>
</html>