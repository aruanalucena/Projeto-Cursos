    <?php
    require "req/funcoesLogin.php";
    include "inc/head.php";

    if ($_REQUEST) {
        $nome = $_REQUEST["nome"];
        $email = $_REQUEST["email"];
        $senha = $_REQUEST["senha"];
        $confirmarSenha = $_REQUEST["confirmarSenha"];
         $md5= md5(md5($senha));
         echo $senha . "<br>";
          echo $md5; 

         $cadastro = md5 ($senha);
         $login = md5($senha);
         echo $cadastro. "<br>";
         echo $login; 
         exit;

         $hash = password_hash($senha,password_default);
         echo $hash;
         exit;


        //  verifica se asenha é igualao confrimas senha 
        if ($senha == $confirmarSenha) {

            $senhaCrip = password_hash($senha, PASSWORD_DEFAULT);
            // criando um novo usuario
            $novoUsuario = [
                "nome" => $nome,
                 "email" => $email,
                "senha"=> $senhaCrip,
            ];
        
            $cadastrou = cadastrarUsuario($novoUsuario);
        }else {
            $erro = "senhas imcompativeis";
        }
    }
    ?>



    <div class="page-center">
        <h2>Cadastre - se</h2>
        <!-- verifica se a variavel cadastro u foi deinida  - ->
        <?php if (isset($cadastrou)&& $cadastrou):?>
            <div class=" alerte alert-success" role="alert">
                <span> Usuario cadastrado com sucesso !</span>
            </div>
           
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