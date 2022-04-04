<?php

include 'conexao.php';

$id = $_POST['id'];

$nome_produto = $_POST['nome'] ?? '';
$numero_produto = $_POST['numero'] ?? '0';
$quantidade_produto = $_POST['quantidade'] ?? '';
$categoria_produto = $_POST['categoria'] ?? '';
$fornecedor_produto = $_POST['fornecedor'] ?? '';



$sql = "UPDATE `estoque` SET `nome` = '$nome_produto', `numero` = '$numero_produto', `categoria` = '$categoria_produto', `fornecedor` = '$fornecedor_produto', `quantidade` = '$fornecedor_produto'
WHERE (`id` = '$id');";

$result = mysqli_query($conexao, $sql);


if (!empty($result)) {
    header('Location: listaprodutos.php');
    exit;
}
