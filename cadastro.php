    <?php
    require "req/funcoesLogin.php";
    include "inc/head.php";

    if ($_REQUEST) {
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $confirmarSenha = $_REQUEST["confirmarSenha"];
        //  verifica se asenha é igualao confrimas senha 
        if ($senha == $confirmarSenha ){
            // criando um novo usuario
            $novoUsuario = [
                "nome" => $nome,
                "email" => $email,
                "senha"=> $senha
            ];
            // cadastro meu usuario no json
                $cadastrou = cadastrarusuario($novoUsuario);

         }else {
            $erro = "senhas imcompativeis";
        }
    }
        ?>



        <div class="page-center">
            <h2>Cadastre - se</h2>
        <!-- verifica se a variavel cadastrou foi deinida -->
            <?php if (isset($cadastrou)&& $cadastrou):?>
            <div class=" alerte alert-success" role= "alert">
                <span> Usuario cadastrado com sucesso !</span>
            </div>
            <!-- verifica se a avariavel erro foi definida  -->
            <?php elseif (isset($erro)):?>
            <div class=" alert alert-danger" role="alert">
                <?php echo $erro;?>
            </div>

            <?php endif; ?>

            <form action="cadastro.php" method="post" class="col-md-7">
                <div class=col-md-12>
                    <Label for=" inputNome">Nome </Label>
                    <input type="text" name="nome" class="form-control" id="inputNome">
                </div>
                <div class=col-md-12>
                    <Label for=" inputEmail">Email </Label>
                    <input type="email" name="email" class="form-control" id="inputEmail">
                </div>
                <div class=col-md-12>
                    <Label for=" inputSenha">Senha </Label>
                    <input type="password" name="senha" class="form-control" id="inputSenha">
                </div>
                <div class=col-md-12>
                    <Label for=" inputConfirmarSenha">Confirme sua senha ! </Label>
                    <input type="password" name="confirmarSenha" class="form-control" id="inputConfirmarSenha">
                </div class="col-md-12">
                <br>
                <br>
                <button class=" btn btn-primary" type="submit">Cadastrar</button>
                <a href="login.php" class="col-md-offset-9" type="submit">Fazer Login</a>

                <div>
            </form>

        </div>



        <?php
        include "inc/Footer.php";

        ?>