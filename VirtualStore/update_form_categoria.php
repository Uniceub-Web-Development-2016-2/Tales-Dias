<?php
include("cabecalho.php");
include("connection.php");
include("dao_produto.php");
include("dao_categoria.php");
$id = $_GET['id'];
$categoria = buscaCategoria($conexao,$id);
$categorias = listaCategorias($conexao);
?>

<h1>Alteração de Categorias</h1>
<form action="update_categoria.php" method="post">
  <input type="hidden" name="id" value="<?=$categoria['id']?>" />
  <table class="table">
    <tr>
      <td>Tipo</td>
      <td> <input class="form-control" type "text" name="nome" value="<?=$categoria['nome']?>"></td>
    </tr>
    <tr>
      <td><input class="btn btn-primary" type="submit" value="Alterar" /></td>
    </tr>

</form>

<?php include("rodape.php"); ?>
