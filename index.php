<?php 
        // $nomeCurso1 = "Full Stack";
        // $descricaoCurso1 = "Curso de desenvolvimento web";
        // $valorCurso1 = 1000.99;
        // $imagemCurso1 = "full.jpeg";

        // $nomeCurso2 = "Marketing Digital";
        // $descricaoCurso2 = "Curso de Marketing";
        // $valorCurso2 = 1000.98;
        // $imagemCurso2 = "marketing.jpg";

        $usuario = [
            "Nome"=>"Aruana",
            "email"=>"teste@teste.com",
            "senha"=> "12346",
            "NivelAcesso"=>mt_rand(0,1)

        ];
    // 
    $cursos = [ "Full stack"=>["Curso de desenvolvimento web", 1000.99,  "full.jpeg", "fullstack"],
    "marketing digital"=>["curso de marketing", 1000.98, "marketing.jpg","marketing"],
    "ux" => ["curso de user experience",9000.98,"ux.jpg","ux"],
    "android"=>["curso de apps",1000.97,"android.jpg","android"],


];
    
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">
                    <span>Cursos</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php if ($usuario["NivelAcesso"] == 1) : ?>

                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                            aria-expanded="false">Ações <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Adicionar Produto</a></li>
                            <li><a href="#">Editar Produto</a></li>
                        </ul>
                    </li>
                </ul>
                <?php endif;?>
                <?php foreach ($cursos as $nomeCurso => $infosCurso):?>
                <div class="modal fade" id="<?php echo $infosCurso[3];?>" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Prenncha seus dados</h4>
                            </div>
                            <div class="modal-body">
                                <h4>Curso de:<?php echo $nomeCurso?></h4>
                                <h4>Preço R$ <?php echo $infosCurso[1]?></h4>
                                <form action="validarCompra.php" method="post">
                                    <input type="hidden"name="nomeCurso" value="<?php echo $nomeCurso?>">
                                    <input type="hidden"name="precoCurso" value="<?php echo $infoCurso[1]?>">
                                    <div class="input-group col-md-5">
                                        <label for="nomeCompleto">nome completo </label>
                                        <input id="nomeCompleto" name="nomeCompleto" type="text" class"form-control">
                                    </div>
                                    <div class="input-group col-md-5">
                                        <label for="cpf">CPF </label>
                                        <input id="cpf" name="cpf" type="number" class"form-control">
                                    </div>
                                    <div class="input-group col-md-5">
                                        <label for="nroCartao">Numero cartao </label>
                                        <input id="nrocartao" name="nroCartao" type="number" class"form-control">
                                    </div>
                                    <div class="input-group col-md-5">
                                        <label for="validade">validade </label>
                                        <input id="validade" name="validade" type="month" class"form-control">
                                    </div>
                                    <div class="input-group col-md-5">
                                        <label for="cvv">CVV </label>
                                        <input id="cvv" name="cvv" type="number" class"form-control">
                                    </div>
                                    <button class="btn btn-primary" type="submit">comprar</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <?php endforeach;?>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Pesquise Aqui">
                </div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"
                        aria-hidden="true"></span></button>
            </form>
            <p class="navbar-text navbar-right">
                Logado como
                <strong>
                    <a href="#" class="navbar-link"><?php echo $usuario["Nome"];?></a>
                </strong>
            </p>
        </div>
        </div>

    </nav>

    <div class="container">
        <div class="row">
            <?php foreach ($cursos as $nomeCurso => $infosCurso):?>
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <img src="<?php echo "assets/img/$infosCurso[2]"; ?>" alt="<?php echo "Foto curso $nomeCurso"; ?>">
                    <div class="caption">
                        <h3><?php echo $nomeCurso; ?></h3>
                        <p><?php echo $infosCurso[0]; ?></p>
                        <p><?php echo $infosCurso[1]; ?></p>
                        <a href="#" class="btn btn-info" role="button" data-toggle="modal"
                            data-target="#<?php echo $infosCurso[3];?>">Comprar</a>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
                integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
                crossorigin="anonymous"></script>

</body>

</html>