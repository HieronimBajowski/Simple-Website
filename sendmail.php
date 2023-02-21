<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$to = 'jan.kowalski@gmail.com';
	$subject = 'Wiadomość ze strony Fastfood';
	$body = "Imię i nazwisko: $name\n\nE-mail: $email\n\nWiadomość:\n$message";
	$headers = 'From: webmaster@example.com' . "\r\n" .
		'Reply-To: webmaster@example.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

	if (mail($to, $subject, $body, $headers)) {
		http_response_code(200);
	} else {
		http_response_code(500);
	}
}
?>
