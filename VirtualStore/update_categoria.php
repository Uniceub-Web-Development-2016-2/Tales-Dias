<?php
include("cabecalho.php");
include("connection.php");
include("dao_categoria.php");

        $id = $_POST['id'];
        $categoria = $_POST['nome'];

        if(alteraCategoria($conexao, $id, $categoria)){?>
          <p class="text-success">
          A categoria <?= $categoria; ?> foi alterado!
          </p>
        <?php }else{
          $msg = mysqli_error($conexao);
          ?>
          <p class="text-danger">
          O produto <?= $categoria; ?> não foi alterado: <?=$msg?>
          </p>
          <?php
        }
        ?>
<?php include("rodape.php"); ?>
