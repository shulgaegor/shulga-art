<script src='https://www.google.com/recaptcha/api.js'></script>
<?php 
if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response']) {
	$secret = '6LcZ_EEUAAAAAIcvp7LGRHtEDH8eJw9la8S-Tylx';
	$ip = $_SERVER['REMOTE_ADDR'];
	$response = $_POST['g-recaptcha-response'];
	$rsp = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response&remoteip=$ip");
	$arr = json_decode($rsp, TRUE);
	if($arr['success']){
		// Извлекаем данные из формы
		$name = htmlspecialchars ($_POST['lpname']);
		$email = htmlspecialchars ($_POST['lpemail']);
		$tel = htmlspecialchars ($_POST['lptel']);
		$message = htmlspecialchars ($_POST['lptext']);

		// Формируем заголовки письма
		$headers= "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html;charset=utf-8 \r\n";
		$headers .= "From: Егор Шульга <admin@shulga-art.ru>\r\n";
		$headers .= "Reply-To:admin@shulga-art.ru\r\n";
		$recipient= "admin@shulga-art.ru";
		$subject = "Письмо с shulga-art";
		// Составляем текст письма админу
		$message = "<p>Внимание! Письмо с сайта www.shulga-art.ru!</p>
		<p>Имя: $name</p>
		<p>Тел: $tel</p>
		<p>E-mail: $email</p>
		<p>Сообщение: $message</p>";

		// Отсылаем письмо админу

		if (mail($recipient, $subject, $message, $headers))
		// Отправляем пользователя на страницу "Спасибо"
			header( "Location: thank.html");
			else header( "Location: error-send.html");//иначе - ошибка
		}

		//header( "Location: thank.html");		
	}
	else header( "Location: bot-send.html");//вы - бот

?>