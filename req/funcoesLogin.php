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
    }
