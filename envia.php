<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $mensagem = addcslashes($_POST['mensagem']);

    $para = "daviisidorocontato@gmail.com";
    $assunto = "Contato" ;

    $corpo = "Nome: " .$nome."\n"."Email :" .$email."\n"."Telefone: " .$telefone."\n"."Mensagem: " .$mensagem;

    $cabeca = "From: daviisidoro99@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if (mail($para,$assunto,$corpo,$cabeca)){
        echo("Email enviado com Sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>
