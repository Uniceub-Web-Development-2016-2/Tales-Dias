<?php
include("cabecalho.php");
include("connection.php");
include("dao_categoria.php");?>

<?php
if(array_key_exists("removido", $_GET) && $_GET['removido']==true) {
?>
<p class="alert-success">Categoria apagado com sucesso.</p>
<?php
  }
?>

<table class="table table-striped table-bordered">

<?php
$categorias = listaCategorias($conexao);
foreach($categorias as $categoria) :
?>

    <tr>
        <td><?= $categoria['nome'] ?></td>
        <td><a class="btn btn-primary" href="update_form_categoria.php?id=<?=$categoria['id']?>">alterar</a>
        <td>
          <form form action="remove_categoria.php?id=<?=$categoria['id']?>" method="post">
            <input type="hidden" name="id" value="<?=$categoria['id']?>" />
            <button class="btn btn-danger">remover</button>
          </form>
        </td>
    </tr>

<?php
endforeach
?>
</table>


<?php include("rodape.php"); ?>
