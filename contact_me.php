<?php
// Check for empty fields
if(empty($_POST['nome'])  		||
   empty($_POST['email']) 		||
   empty($_POST['telefone']) 		||
   empty($_POST['mensagem'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Sem argumentos. Não é possível enviar email.";
	
   }
	
$nome = utf8_encode($_POST['nome']);
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$assunto = utf8_encode($_POST['assunto']);
$mensagem = $_POST['mensagem'];
	
$to      = 'contato@aitaimoveis.com.br';
$headers = 'From: ' . $email . "\r\n" .
    'Nome: ' .$nome . "\r\n" .
    'Telefone: ' .$telefone . "\r\n" . 
    'Estado: '. $estado . "\r\n" .
    'Cidade: '. $cidade;

mail($to, $assunto, $mensagem, $headers);
header('Location: index.php');
?>
