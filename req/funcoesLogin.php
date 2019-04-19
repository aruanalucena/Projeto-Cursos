<?php

    // definindo o nome do arquivo
         $nomeArquivo= "usuarios.json";
   
        function cadastrarUsuario($usuario){

        // pegando a variavel pra dentro da função 
        global $nomeArquivo;
            // pegando o ceonteudo do arquivo usuarios.jason
        $usuariosJson= file_get_contents($nomeArquivo);
        // transformando o json em array associativo
        $arrayUsuarios = json_decode($usuariosJson,true);
        // adicionando um novo usuario para o array associativo

        array_push ($arrayUsuarios["usuarios"],$usuario);
        // transformando o array  associativo em j
      
        $usuariosJson= json_encode($arrayUsuarios);
     // colocando o json de volta para o arquivo usuarios.json

        $cadastrou = file_put_contents($nomeArquivo,$usuariosJson);
        // retornando true e false
        return $cadastrou;
    }function logarUsuario($email, $senha){
        global $nomeArquivo;
        $nomeLogado="";
        // pegando o conteudo usuarios.json
            $usuariosJson = file_get_contents($nomeArquivo);
            // transformando o json em array associativo
            $arrayUsuarios = json_decode($usuariosJson,true);
            // verificar se o usuario existe no arquivo usuarios.json
            foreach($arrayUsuarios["usuarios"]as $chave=> $valor){
                // verificando se o email digitado é igual ao email do json
                if ($valor["email"]== $email && password_verify($senha, $valor["senha"])) {
                     $nomeLogado = $valor["nome"];
                     break;

                }
      
          }
          return $nomeLogado;
    }
