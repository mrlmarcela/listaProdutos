<?php

include 'conexao.php';
$id = $_GET['id'];


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>

    <style>
        .button {
            background-color: lightgreen;
            border-color: lightgreen;
            color: #222222;
        }
    </style>

</head>

<body>
    <?php

    include("./navbar.php");

    ?>
    <div class="container">
        <form action="atualizar_produto.php" method="POST">

            <input type="hidden" name="id" value="<?php echo $id; ?>">

            <?php

            $sql = "SELECT * FROM `estoque` WHERE id = $id";
            $buscar = mysqli_query($conexao, $sql);

            while ($array = mysqli_fetch_array($buscar)) {
                $id = $array['id'];
                $nome = $array['nome'];
                $numero = $array['numero'];
                $quantidade = $array['quantidade'];
                $categoria = $array['categoria'];
                $fornecedor = $array['fornecedor'];


            ?>
                <input type="hidden" name="numero" value="<?php echo $numero; ?>">
                <div class="row mt-4 mx-auto w-50 p-3">
                    <div class="col-md-12 mb-3 text-center">

                        <h4>Formulário de Cadastro</h4>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label>Nome do produto</label>
                        <input type="text" name="nome" value="<?php echo $nome; ?>" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label>Número do produto</label>
                        <input type="number" value="<?php echo $numero; ?>" class="form-control" autocomplete="off" required disabled>
                    </div>
                    <div class="col-md-12 mb-4">
                        <label>Quantidade</label>
                        <input type="number" name="quantidade" value="<?php echo $quantidade; ?>" class="form-control" autocomplete="off" required>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Categoria</label>
                        <select class="custom-select" name="categoria">
                            <option <?php if ($categoria == 1) echo "selected"; ?> value="1">Hardware</option>
                            <option <?php if ($categoria == 2) echo "selected"; ?> value="2">Software</option>
                            <option <?php if ($categoria == 3) echo "selected"; ?> value="3">Celulares</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-4">
                        <label>Fornecedor</label>
                        <select class="custom-select" name="fornecedor">
                            <option <?php if ($fornecedor == 1) echo "selected"; ?> value="1">Fornecedor A</option>
                            <option <?php if ($fornecedor == 2) echo "selected"; ?> value="2">Fornecedor B</option>
                            <option <?php if ($fornecedor == 3) echo "selected"; ?> value="3">Fornecedor C</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-5">
                        <button class="button btn btn-lg btn-block" type="submit">Atualizar</button>
                    </div>
                </div>


    </div>
    </form>
<?php
            }

?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>
</body>

</html>