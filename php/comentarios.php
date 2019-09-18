<?php

//isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro
if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
    $assunto = "comentários";

    // pegando os dados do form...
    $msg = "Nome: " . $_POST["nome"] . "<br>";
    $msg .= "E-mail: " . $_POST["email"] . "<br>";
    $msg .= "Mensagem:<br>" . $_POST["mensagem"];
    
    echo($msg);
    echo ("Sua mensagem foi enviada com sucesso!");

    // email onde tu vai receber a mensagem
    $destinatario = "";

    // headers que prepara a mensagem
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    // envia o email...
    mail($destinatario,$assunto,$msg,$headers);

    // volta para contato.html
    header("Location: /index.html");

}

?>