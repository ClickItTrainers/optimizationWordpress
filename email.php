<?php 
	include("./vendor/autoload.php");
	use Mailgun\Mailgun;

	function send_email($email, $name, $url)
	{
	#Instanciando al cliente
	$Client = new Mailgun('key-90006bdde06d8e24c02532aa3f2767d8');
	$domain = "sandboxd014b091eeac4ec8b218c0fe9ba75da2.mailgun.org";

	#Generate the send to client
	$result = $Client->sendMessage($domain, array(
		'from' => $email,
		'to' => 'info@clickittech.com',
		'subject' => 'Wordpress optimization contact',
		'html' => 'Datos del cliente: '. '<br> Email: '.$email.'<br>Name: '.$name.'<br>URL: '.$url
		));

	}

?>