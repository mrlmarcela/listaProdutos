<?php

include 'conexao.php';

$id = $_GET['id'];
$sql = "DELETE FROM `estoque` WHERE (`id` = '$id')";
$result = mysqli_query($conexao, $sql);

if (!empty($result)) {
    header('Location: listaprodutos.php');
    exit;
    // echo "Produto com id igual a $id foi excluído";
} else {
    // echo "Falha ao excluir produto com id igual a $id";
}
