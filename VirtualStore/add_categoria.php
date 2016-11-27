<?php
include("cabecalho.php");
include("connection.php");
include("dao_categoria.php");

        $categoria = $_POST["nome"];

        if(insereCategoria($conexao, $categoria)){?>
          <p class="text-success">
          O item <?= $categoria; ?> foi adicionado com sucesso!
          </p>
        <?php }else{
          $msg = mysqli_error($conexao);
          ?>
          <p class="text-danger">
          O item <?= $categoria; ?> não foi adicionado: <?=$msg?>
          </p>
          <?php
        }
        ?>
<?php include("rodape.php"); ?>
