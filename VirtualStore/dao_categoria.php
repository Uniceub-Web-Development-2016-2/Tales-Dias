<?php
function listaCategorias($conexao) {
    $categorias = array();
    $query = "select * from categorias";
    $resultado = mysqli_query($conexao, $query);
    while($categoria = mysqli_fetch_assoc($resultado)) {
        array_push($categorias, $categoria);
    }
    return $categorias;
}

function insereCategoria($conexao, $categoria) {
    $query = "insert into categorias (nome) values ('{$categoria}')";
    $resultadoDaInsercao = mysqli_query($conexao, $query);
    return $resultadoDaInsercao;
}

function removeCategoria($conexao, $id) {
    $query = "delete from categorias where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaCategoria($conexao, $id) {
    $query = "select * from categorias where id = {$id}";
    $resultado = mysqli_query($conexao, $query);
    return mysqli_fetch_assoc($resultado);
}

function alteraCategoria($conexao, $id,$categoria) {
  $query = "update categorias set nome = '{$categoria}' where id = '{$id}'";
  return mysqli_query($conexao, $query);
}
