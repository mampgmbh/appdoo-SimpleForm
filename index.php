<?php

	if (isset($_POST['Email_Address_Input_Field']) === true && isset($_POST['Name_Input_Field']) === true && isset($_POST['Text_Multiline_Text_Field']) === true) {

		$from_email = (string) trim(strip_tags($_POST['Email_Address_Input_Field']));
		$from_name = (string) trim(strip_tags($_POST['Name_Input_Field']));
		$message = (string) trim(strip_tags($_POST['Text_Multiline_Text_Field']));

		$result = (bool) false;

		if ($from_email !== '' && $from_name !== '' && $message !== '') {
			$headers = (string) '';
			$headers .= 'From: '.$from_name.' <'.$from_email.'>';
			$headers .= "\r\nReply-To: ".$from_email;
			$headers .= "\r\nX-Mailer: PHP/".phpversion();

			$to = (string) 'YOUR_EMAIL_ADDRESS'; // Enter your e-mail address here.
			$subject = (string) 'YOUR_SUBJECT'; // Enter the subject of the e-mail here.
			
			$result = (bool) mail($to, $subject, $message, $headers);
		}

		if ($result === true) {
			echo 'success';
		} else {
			echo 'failure';
		}
	}

?>