<?php
$nome = $_POST['nome'];

$idade= $_POST['idade'];
$categoria = "";

if ($idade>18){
    $categoria="está na categoria: Adulto!";
}
elseif($idade<=18 and $idade>=13){
    $categoria="está na categoria: Adolescente!";
}
elseif($idade >=6 and $idade <=12 ){
    $categoria="está na categoria: Infatil!";
}
else
    $categoria = "é muito novo para competir!"
?>
<html>
<center><h2>Olá <?php echo($nome) ?></h2></center>
<h3>
<?php print("Olá $nome, por sua idade ser de $idade anos, você $categoria") ?></h3>
</html>