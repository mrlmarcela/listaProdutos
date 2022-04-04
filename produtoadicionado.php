<?php

include 'conexao.php';

$nome_produto = $_POST['nome'] ?? '';
$numero_produto = $_POST['numero'] ?? '';
$quantidade_produto = $_POST['quantidade'] ?? '';
$categoria_produto = $_POST['categoria'] ?? '';
$fornecedor_produto = $_POST['fornecedor'] ?? '';



$sql = "INSERT INTO `estoque` ( `nome`, `numero`, `categoria`, `fornecedor`, `quantidade`) 
VALUES ('{$nome_produto}','{$numero_produto}', '{$categoria_produto}', '{$fornecedor_produto}', '{$quantidade_produto}');";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
<style>
    .button {
        background-color: lightgreen;
        border-color: lightgreen;
        color: #222222;
    }
</style>
<?php

include("./navbar.php");

?>
<div class="container">
    <div class="row mt-4 mx-auto w-50 p-3">
        <div class="col-md-12 mb-5 pb-5 text-center">
            <img width="300" height="300" src="https://rsv-ink-images-production.s3.amazonaws.com/art/127643/xlarge_mao-de-ilustracao-com-gesto-de-legal-positivo.png?v=1631610602">
            <h2>Produto adicionado com sucesso!</h2>
        </div>
        <div class="col-md-6 mb-5 mt-5">
            <a class="button btn btn-lg btn-block" href="cadastroprodutos.php" type="button">Cadastrar novo produto</a>
        </div>
        <div class="col-md-6 mb-5 mt-5">
            <a class="button btn btn-lg btn-block" href="listaprodutos.php" type="button">Ver lista de produtos</a>
        </div>