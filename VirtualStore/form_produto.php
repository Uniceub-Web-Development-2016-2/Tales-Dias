<?php
include("cabecalho.php");
include("connection.php");
include("dao_produto.php");
include("dao_categoria.php");
$categorias = listaCategorias($conexao);
?>

<h1>Formulário de Produtos</h1>
<form action="add_produto.php" method="post">
  <table class="table">
    <tr>
      <td>Nome</td>
      <td> <input class="form-control" type "text" name="nome"></td>
    </tr>
    <tr>
      <td>Preço</td>
      <td><input class="form-control" type "text" name="preco"></td>
    </tr>
    <tr>
      <td>Descrição</td>
      <td><textarea class="form-control" name="descricao"></textarea></td>
    </tr>
    <tr>
      <td></td>
      <td><input type="checkbox" name="usado" value="true"> Usado
    </tr>
    <td>Categoria</td>
    <td>
      <select name="categoria_id">
      <?php foreach($categorias as $categoria) : ?>
      <option value="<?=$categoria['id']?>"><?=$categoria['nome']?></option>
      <?php endforeach ?>
      </select>
    </td>
    <tr>
      <td><input class="btn btn-primary" type="submit" value="Cadastrar" /></td>
    </tr>

</form>

<?php include("rodape.php"); ?>
