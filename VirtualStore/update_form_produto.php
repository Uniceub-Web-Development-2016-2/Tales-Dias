<?php
include("cabecalho.php");
include("connection.php");
include("dao_produto.php");
include("dao_categoria.php");
$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listaCategorias($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
?>

<h1>Alteração de Produtos</h1>
<form action="update_produto.php" method="post">
  <input type="hidden" name="id" value="<?=$produto['id']?>" />
  <table class="table">
    <tr>
      <td>Nome</td>
      <td> <input class="form-control" type "text" name="nome" value="<?=$produto['nome']?>"></td>
    </tr>
    <tr>
      <td>Preço</td>
      <td><input class="form-control" type "text" name="preco" value="<?=$produto['preco']?>"></td>
    </tr>
    <tr>
      <td>Descrição</td>
      <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="checkbox" name="usado" <?=$usado?> value="true"> Usado
    </tr>
    <td>Categoria</td>
    <td>
        <select name="categoria_id" class="form-control">
        <?php
            foreach($categorias as $categoria) :
            $essaEhACategoria = $produto['categoria_id'] == $categoria['id'];
            $selecao = $essaEhACategoria ? "selected='selected'" : "";
        ?>
            <option value="<?=$categoria['id']?>" <?=$selecao?>>
              <?=$categoria['nome']?>
            </option>
        <?php endforeach ?>
        </select>
    </td>
    <tr>
      <td><input class="btn btn-primary" type="submit" value="Alterar" /></td>
    </tr>

</form>

<?php include("rodape.php"); ?>
