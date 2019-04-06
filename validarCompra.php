<?php
$nome = $_REQUEST["nomeCompleto"];
$cpf = $_REQUEST["cpf"];
$nroCartao = $_REQUEST["nroCartao"];
$validade =$_REQUEST["validade"];
$cvv = $_REQUEST["cvv"];
$nomeCurso = $_REQUEST["nomeCurso"];
$precoCurso = $_REQUEST ["precoCurso"];
$erros=[];



//funcoes
function validarnome($nome){
    return strlen($nome) >0 && strlen($nome)<=15;
}
function validarCpf($cpf){
    return strlen($cpf)==11;
}
function validarNrocartao($nroCartao){
$primeiroNum = substr($nroCartao,0,1);
    return $primeiroNum==4||$primeiroNum==5||$primeiroNum==6;
}

// validar se a data inserida é maior que a data atual
function validardata($data){
    $dataAtual = date("Y-m");
    return $data>=$dataAtual;
}
function validarCvv($cvv){
    return strlen(&cvv)==3;
}
function validarCompra($nome,$cpf,$nroCartao,$data,$cvv){
    global $erros;
    if (!validarnome($nome)){
        array_push($erros,"preencha seu nome");
    }
    if (!validarCpf($cpf)){
        array_push($erros" seu cpf precisa ter 11 caracteres");
    }
    if (!validarNrocartao($nroCartao)){
        array_push($erros,"seu cartao precisa coomeçar 4,5 ou 6");

    }
    if (!validardata($data)){
        array_push($erros," a validade precisa maior que a data atual");
    }
    if (!validadeCvv($cvv)){
        array_push($erros,"seu cvv precisa ter 3 numero");
    }
}
 
validarCompra($nome,$cpf,$nroCartao,$cvv);
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
            <?php if(count($erros)>0):?>
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <span>
                        PREENCHA SEUS DADOS CORRETAMENTE!
                    </span>
                </div class="panel-body">
                <ul class="list-group">
                    <?php foreach($erros as $chave=> $valor):?>
                    <li class="list-group-item">
                  <?=$valorErro;?>
                    </li>
                <?php endforeach;?>
                     </ul>
                <div class="center">
                <a href="index.php">Voltar para Home</a>
                </div>
            </div>
            <?php else;?>
                 <div class="panel panel-primary">
                <div class="panel-heading">
                    <span>
                        Compra realizada com sucesso!
                    </span>
                </div class="panel-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nome Curso:</strong><?=$nomeCurso;?></li>
                    <li class="list-group-item"><strong>Preço: R$</strong> <?=$precoCurso;?></li>
                    <li class="list-group-item"><strong>Nome Completo:</strong> <?php echo $nome;?></li>

                </ul>
                <div class="center">
                <a href="index.php">Voltar para Home</a>
                </div>
            </div>

        </div>
</body>

</html>