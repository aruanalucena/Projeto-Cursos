<?php
require "req/funcoeslogin.php";
include "inc/head.php";

if ($_REQUEST) {
    // pegando os valores do inputs
    $email = $_REQUEST["email"];
    $senha = $_REQUEST["senha"];
    // verificando se o usuario esta logado atraves da funcao
    $nomeLogado = logarUsuario($email, $senha);

    if ($nomeLogado == true) {
        session_start();
        $_SESSION["nome"] = $nomeLogado;
        $_SESSION["email"] = $email;

        $_SESSION["nivelAcesso"]= mt_rand(0,1);
        // CRIANDO NOVO CAMPO NA SESSÃO
        $_SESSION ["LOGADO"] = true;
        header("location:index.php");
    } else {
        $erro = "seu usuario não foi encontrado !";
    }
}


?>
<div class="page-center">
    <h2>LOGIN</h2>
    <!-- mostra a mensagem de erro caso a variavel $erro  esteja definida -->
    <?php if (isset($erro ) ):?>
        <div class="alert alert-danger">
            <span><?php echo  $erro;?></span>
        </div>
    <?php endif; ?>

    <form action="login.php" method="post" class="col-md-7">

        <div class=col-md-12>
            <Label for=" inputEmail">Email </Label>
            <input type="email" name="email" class="form-control" id="inputEmail">
        </div>
        <div class=col-md-12>
            <Label for=" inputSenha">Senha </Label>
            <input type="password" name="senha" class="form-control" id="inputSenha">
        </div>

        <br>
        <br>
        <button class=" btn btn-primary" type="submit">Entrar</button>
        <a href="cadastro.php" class="col-md-offset-9" type="submit">Fazer Cadastro</a>

        <div>
    </form>
    <?php



    include "inc/footer.php";

    ?>