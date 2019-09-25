<?php


if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])){

    $assunto = "Comentários";

    // pegando os dados do form...
    $msg = "Nome: " . $_POST["nome"] . "<br>";
    $msg .= "E-mail: " . $_POST["email"] . "<br>";
    $msg .= "Telefone: " . $_POST["telefone"] . "<br>";
    $msg .= "Mensagem:<br>" . $_POST["mensagem"];
    
    echo($msg);

    // email onde tu vai receber a mensagem
    $destinatario = "marcelo.carvalho@praxisjr.com.br";

    // headers que prepara a mensagem
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
    $headers .= "Reply-To: " . $_POST["email"] . "\r\n";

    // envia o email...
    mail($destinatario,$assunto,$msg,$headers);

    // volta para contato.html
    header("Location: ../index.html");

}
//else(empty($_POST['nome'])  empty($_POST['email']) && empty($_POST['mensagem'])){




//isset checa se o botão enviar foi clicado e só vai disparar o email se for verdadeiro

?>