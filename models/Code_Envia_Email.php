<?php
session_start();
require '../utils/conexao.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exeception;

//este arquivo possui todas as classes que precisamos.
require '../vendor/autoload.php';


$emailUser = $_POST['email'];

//criando um objeto da classe PHPMailer
$mail = new PHPMailer(true);
// $data_envio = date('d/m/Y');
// $hora_envio = date('H:i:s');

if (strlen($_POST['email']) == 0){
	$_SESSION['message'] = "E-mail não informado";
	header("location: ../views/index.php");
	exit(0); 
}

else {
	try {
		// comando comentado serve para trazer informações do envio do email - apenas usado para debug, o numero '2' representa as informações a serem retornadas, alterando isso, altera o retorno
		// $mail->SMTPDebug = 2;									
		$mail->isSMTP();											
		$mail->Host	 = 'smtp.gmail.com';					
		$mail->SMTPAuth = true;							
		$mail->Username = 'ticar586@gmail.com';				
		$mail->Password = 'tdwp irbi ztui xdwy';
		//padrão de encriptação 
		$mail->SMTPSecure = 'tls';							
		$mail->Port	 = 587;
		// Informa se vamos enviar mensagens usando HTML
		$mail->IsHTML(true);
		//de quem foi enviado o email
		$mail->setFrom('ticar586@gmail.com', 'TiCar');	
		//aqui é onde vai o email do usuário 
		$mail->addAddress($emailUser);
		// $mail->addAddress('recipient2@example.com', 'Name');
		$mail->isHTML(true);								
		$mail->Subject = 'Alterar Senha - TiCar';
		$mail->Body =
		'<b>acesse o link abaixo para redefinir sua senha</b>
		<br><br>
		<a href="http://localhost/TGFatec/views/V_redefineSenha.php">Acesse o link</a>';
		$mail->AltBody = 'Body in plain text for non-HTML mail clients';
		$mail->send();
		$_SESSION['message'] = "E-mail enviado para $emailUser com sucesso!";
		header("location: ../views/index.php");
		exit(0); 
	} catch (Exception $e) {
		$_SESSION['message'] = "Falha ao enviar E-mail";
		header("location: ../views/index.php");
		exit(0); 
		// echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
	}

}
?>