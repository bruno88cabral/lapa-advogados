<?php

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$msg = $_POST['mensagem'];
 
require_once('PHPMailer-master/PHPMailerAutoload.php');
 
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->SMTPDebug = 1;
$mailer->Port = 587; //Indica a porta de conexão para a saída de e-mails. Utilize obrigatoriamente a porta 587.
 
$mailer->Host = 'smtp.jauhockey.com.br'; //Onde em 'servidor_de_saida' deve ser alterado por um dos hosts abaixo:
//Para cPanel: 'localhost';
//Para Plesk 11 / 11.5: 'smtp.dominio.com.br';
 
//Descomente a linha abaixo caso revenda seja 'Plesk 11.5 Linux'
//$mailer->SMTPSecure = 'tls';
 
$mailer->SMTPAuth = true; //Define se haverá ou não autenticação no SMTP
$mailer->Username = 'contato@jauhockey.com.br'; //Informe o e-mai o completo
$mailer->Password = 'aQui3jau'; //Senha da caixa postal
$mailer->FromName = 'Lapa Advogados'; //Nome que será exibido para o destinatário
$mailer->From = 'contato@jauhockey.com.br'; //Obrigatório ser a mesma caixa postal indicada em "username"
$mailer->AddAddress($email); //Destinatários
$mailer->Subject = $assunto;
$mailer->Body = $msg;
if(!$mailer->Send())
{
echo "Mensagem nao enviada";
echo "Erro: " . $mailer->ErrorInfo; exit; }
print "E-mail enviado!";
 
	
?>
 