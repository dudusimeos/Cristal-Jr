<?php

if (isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['telefone'])){

$assunto = "Landing Page";

// pegando os dados do form...
$msg = "Nome: " . $_POST["nome"] . "<br>";
$msg .= "E-mail: " . $_POST["email"] . "<br>";
$msg .= "Telefone:<br>" . $_POST["telefone"];

echo($msg);

// email onde tu vai receber a mensagem
$destinatario = "";

// headers que prepara a mensagem
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: " . $_POST["nome"] . "<" . $_POST["email"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["email"] . "\r\n";

// envia o email...
mail($destinatario,$assunto,$msg,$headers);

// vai para pdf
header("Location: ../download/planodeensino.pdf");

}

?>