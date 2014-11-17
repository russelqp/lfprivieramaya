<?php
	$sendTo = "russel@atleticolaonda.com";
	$subject = $_POST["asunto"];
	$headers = "From: " . "Flashform";
	$headers .= "<" . $_POST["email"] . ">\r\n";
	$headers .= "Reply-To: " . $_POST["email"]; 
	$message = $_POST["cuerpo"];
	mail($sendTo, $subject, $message, $headers);
	echo "estado=Mensaje enviado :D";
?>