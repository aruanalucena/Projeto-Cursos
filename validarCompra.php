<?php
$nome = $_REQUEST["nomeCompleto"];
$cpf = $_REQUEST["cpf"];
$nroCartao = $_REQUEST["nroCartao"];
$validade =$_REQUEST["validade"];
$nomeCurso = $_REQUEST["nomeCurso"];
$precoCurso = $_REQUEST ["precoCurso"];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" <link
        rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" <link
        rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class=" col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>
                        Compra realizada com sucesso!
                    </span>
                </div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nome Curso:</strong><?=$nomeCurso;</li>
                    <li class="list-group-item"><strong>Preço: R$</strong> <?=$precoCurso;</li>
                    <li class="list-group-item"><strong>Nome Completo:</strong> <?php echo $nome;<?php echo $nome;?></li>

                </ul>
                <div class="center">
                <a href="index.php">Voltar para Home</a>
                </div>
            </div>

        </div>
</body>

</html>