<?php
include "servicos/messagemSessao.php";
include "servicos/categoriaCompetidor.php";
include "servicos/validacao.php";


$nome = $_POST['nome'];

$idade= $_POST['idade'];

definirCategoria($nome, $idade);

header('location: index.php');