<?php
ini_set('display_errors', 0);
error_reporting(E_ALL);

$nome = $_POST["name"];
$telefone = $_POST["phone"];
$email = $_POST["email"];
$mensagem = $_POST["message"];


$from = "$nome <$email>";
    
$to = "catarseproducoessonoras@gmail.com ";
 
$subject = "Formulário de Contato da Catarse";
 
$message = "
<html>
<head>
</head>
<body>
<h1>$mensagem<h1>
<h3>Telefone\Celular : $telefone </h3>
</body>
</html>
";
 

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 

$headers .= "From: $from\nReply-To: $email" ;

 
$resultado = mail($to, $subject, $message, $headers);
 
echo json_encode($resultado);








 

 
