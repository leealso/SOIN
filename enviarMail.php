<?php
	require 'vendor/autoload.php';
	$sendgrid = new SendGrid('app44193749@heroku.com', 'j1mvpwjh5536');
	
	$message = new SendGrid\Email();
	$message->addTo('lsoto@soin.co.cr')->
	          setFrom($_POST['txtEmail'])->
	          setSubject($_POST['txtAsunto'])->
	          setHtml('<strong>'.$_POST['txtMensaje'].'</strong>');
	$response = $sendgrid->send($message);
	include 'index.php';
?>