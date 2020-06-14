<?php
	session_start();
	if (isset($_POST["send"])) {
		$from = htmlspecialchars ($_POST["from"]);
		$to = htmlspecialchars ("mezgoodle@gmail.com");
		$subject = htmlspecialchars ($_POST["subject"]);
		$message = htmlspecialchars ($_POST["message"]);
		$_SESSION["from"] = $from;
		$_SESSION["to"] = $to;
		$_SESSION["subject"] = $subject;
		$_SESSION["message"] = $message;
		$error_from = "";
		$error_message = "";
		$error_subject = "";
		$error_to = "";
		$error = false;
		 if ($from == "" || !preg_match ("/@/", $from)) {
			$error_from = "Введіть коректний email";
			$error = true;
		}
		if (strlen($subject) == 0) {
			$error_subject = "Введіть тему повідомлення";
			$error = true;
			echo "1<br>";
		}
		if (strlen($message) == 0) {
			$error_message = "Введіть повідомлення";
			$error = true;
			echo "1<br>";
		}
		if (!$error) {
			$subject = "=?utf-8?B?".base64_encode($subject)."?=";
			$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
			mail ($to, $subject, $message, $headers);
			header ("location: success.php?send=1");
			exit();
		}
		else {
			echo "Sorry, but we expected error. Please send your message later";
		}
	}
?>