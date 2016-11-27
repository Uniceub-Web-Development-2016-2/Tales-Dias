<?php
include("cabecalho.php");
include("connection.php");
include("dao_produto.php");

$id = $_POST['id'];
removeProduto($conexao, $id);

header("Location: list_produto.php?removido=true");
die();
?>


<?php include("rodape.php"); ?>
