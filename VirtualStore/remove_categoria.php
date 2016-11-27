<?php
include("cabecalho.php");
include("connection.php");
include("dao_categoria.php");

$id = $_POST['id'];
removeCategoria($conexao, $id);

header("Location: list_categoria.php?removido=true");
die();
?>


<?php include("rodape.php"); ?>
