<?php

    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $telefone = addslashes($_POST['telefone']);

    $para = "daviisidorocontato@gmail.com";
    $assunto = "Coleta de dados - Inteliogia";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;

    $cabeca = "From: srdavi46@gmail.com - daviisidoro"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }

?>
