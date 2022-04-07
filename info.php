<?php
session_start();

$nome = $_POST['nome'];

$idade= $_POST['idade'];

if (empty($nome)){
    $_SESSION['msg_error'] = "  Erro!!! O Nome não pode estar vázio.  ";
    header('Location: index.php');
    return;
}
elseif (strlen($nome) <= 3){
    $_SESSION['msg_error'] = "  Erro!!! O nome deve possuir ao menos 3 dígitos.  ";
    header('Location: index.php');
    return;
}

elseif (empty($idade)){

    $_SESSION['msg_error'] = "  Erro!!! A idade não pode estar vázia.  ";
    header('Location: index.php');
    return;
}

elseif (strlen($nome) > 30) {
    $_SESSION['msg_error'] = "  Erro!!! O nome não deve possuir mais do que 30 dígitos.  ";
    header('Location: index.php');
    return;
}
elseif (!is_numeric($idade)){

    $_SESSION['msg_error'] = "  Erro!!! O campo idade deve ser preenchido com um valor numérico.  ";
    header('Location: index.php');
    return;
}


else{

    if ($idade>18){
        $_SESSION['msg_sucesso'] = "  Olá $nome, por sua idade ser de $idade anos, você está na categoria: Adulto!  ";
        header('Location: index.php');
        return;
    }
    elseif($idade<=18 and $idade>=13){
        $_SESSION['msg_sucesso'] = "  Olá $nome, por sua idade ser de $idade anos, você está na categoria: Adolescente!  ";
        header('Location: index.php');
        return;
    }
    elseif($idade >=6 and $idade <=12 ){
        $_SESSION['msg_sucesso'] = "  Olá $nome, por sua idade ser de $idade anos, você está na categoria: Infatil!  ";
        header('Location: index.php');
        return;
    }
    else{
        $_SESSION['msg_sucesso'] = "  Olá $nome, por sua idade ser de $idade anos, você é muito novo para competir!  ";
        header('Location: index.php');
        return;
    }
}

