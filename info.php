<?php
$nome = $_POST['nome'];

$idade= $_POST['idade'];

$categoria = "";

if (empty($nome)){

    echo("Erro!!! O Nome não pode estar vázio.");
    return;
}
elseif (strlen($nome) < 3){
    echo("Erro!!! O nome deve possuir ao menos 3 dígitos.");
    return;
}

elseif (empty($idade)){

    echo("Erro!!! A idade não pode estar vázia.");
    return;
}

elseif (strlen($nome) > 16) {
    echo("Erro!!! O nome não deve possuir mais do que 16 dígitos.");
    return;
}
elseif (!is_numeric($idade)){

    echo("Erro!!! O campo idade deve ser preenchido com um valor numérico.");
    return;
}


else{

    if ($idade>18){
        $categoria="está na categoria: Adulto!";
    }
    elseif($idade<=18 and $idade>=13){
        $categoria="está na categoria: Adolescente!";
    }
    elseif($idade >=6 and $idade <=12 ){
        $categoria="está na categoria: Infatil!";
    }
    else{
        $categoria = "é muito novo para competir!";
    }
}
?>
<html>
<center><h2>Olá <?php echo($nome) ?></h2></center>
<h3>
<?php print("Olá $nome, por sua idade ser de $idade anos, você $categoria") ?></h3>
</html>