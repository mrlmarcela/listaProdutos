<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <?php

    include("./navbar.php");

    ?>
    <div class="container-fluid">
        <div class="mt-3 col-md-12 mb-4 text-center">
            <h2 class="">Lista de Produtos</h2>
        </div>
        <table class="table">
            <thead style="background:lightgreen">
                <tr>
                    <th scope="col">Nº</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Fornecedor</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'conexao.php';
                $sql = "SELECT * FROM estoque";
                $busca = mysqli_query($conexao, $sql);

                while ($array = mysqli_fetch_array($busca)) {
                    $id = $array['id'];
                    $nome = $array['nome'];
                    $numero = $array['numero'];
                    $quantidade = $array['quantidade'];
                    $categoria = $array['categoria'];
                    $fornecedor = $array['fornecedor'];

                    if ($array['fornecedor'] == 1) {
                        $fornecedor = "fornecedor A";
                    }

                    if ($array['fornecedor'] == 2) {
                        $fornecedor = "fornecedor B";
                    }

                    if ($array['fornecedor'] == 3) {
                        $fornecedor = "fornecedor C";
                    }

                    if ($array['categoria'] == 1) {
                        $categoria = "Hardware";
                    }

                    if ($array['categoria'] == 2) {
                        $categoria = "Software";
                    }

                    if ($array['categoria'] == 3) {
                        $categoria = "Celulares";
                    }

                    $url_editar = "editar_produto.php?id=$id";
                    $url_excluir = "excluir_produto.php?id=$id";



                ?>
                    <tr>
                        <td><?php echo $numero; ?></td>
                        <td><?php echo $nome; ?></td>
                        <td><?php echo $quantidade; ?></td>
                        <td><?php echo $categoria; ?></td>
                        <td><?php echo $fornecedor; ?></td>
                        <td>
                            <a href="<?php echo $url_editar; ?>" class="btn btn-warning btn-sm" type="button" style="background-color: orange; border-color: orange;">
                                <i class="far fa-edit"></i>
                            </a>
                            <a href="<?php echo $url_excluir; ?>" class="btn btn-warning btn-sm" type="button" style="background-color: red; border-color: red;">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>