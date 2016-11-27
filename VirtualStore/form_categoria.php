<?php
include("cabecalho.php");
include("connection.php");
include("dao_produto.php");
include("dao_categoria.php");
$categorias = listaCategorias($conexao);
?>

<h1>Formulário de Categoria</h1>
<form action="add_categoria.php" method="post">
  <table class="table">
    <tr>
      <td>Tipo</td>
      <td> <input class="form-control" type "text" name="nome"></td>
    </tr>
    <tr>
      <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
    </tr>

</form>

<?php include("rodape.php"); ?>
