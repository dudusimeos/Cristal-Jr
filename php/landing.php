<?php

if (isset($_POST['nome4']) && isset($_POST['email4']) && isset($_POST['telefone4']) isset($_POST['cargo']) isset($_POST['empresa'])){

$assunto = "Landing Page";

// pegando os dados do form...
$msg = "Nome: " . $_POST["nome4"] . "<br>";
$msg .= "E-mail: " . $_POST["email4"] . "<br>";
$msg .= "Telefone: " . $_POST["telefone4"] . "<br>";
$msg .= "Cargo: " . $_POST["cargo"] . "<br>";
$msg .= "Empresa:<br>" . $_POST["empresa"];

echo($msg);

// email onde tu vai receber a mensagem
$destinatario = "marcelo.carvalho@praxisjr.com.br";

// headers que prepara a mensagem
$headers = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=utf-8\r\n";
$headers .= "From: " . $_POST["nome4"] . "<" . $_POST["email4"] . ">\r\n";
$headers .= "Reply-To: " . $_POST["email4"] . "\r\n";

// envia o email...
mail($destinatario,$assunto,$msg,$headers);
}

// baixando pdf
$arquivo = $_GET["arquivo"];
   if(isset($arquivo) && file_exists($arquivo)){ 
   // faz o teste se a variavel não esta vazia e se o arquivo realmente existe
      switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){ 
      // verifica a extensão do arquivo para pegar o tipo
         case "pdf": $tipo="application/pdf"; break;
         case "exe": $tipo="application/octet-stream"; break;
         case "zip": $tipo="application/zip"; break;
         case "doc": $tipo="application/msword"; break;
         case "xls": $tipo="application/vnd.ms-excel"; break;
         case "ppt": $tipo="application/vnd.ms-powerpoint"; break;
         case "gif": $tipo="image/gif"; break;
         case "png": $tipo="image/png"; break;
         case "jpg": $tipo="image/jpg"; break;
         case "mp3": $tipo="audio/mpeg"; break;
         case "php": // deixar vazio por seurança
         case "htm": // deixar vazio por seurança
         case "html": // deixar vazio por seurança
      }
      header("Content-Type: ".$tipo); 
      // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo)); 
      // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo)); 
      // informa ao navegador que é tipo anexo e faz abrir a janela de download, 
      //tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
      exit; // aborta pós-ações
   }
?>