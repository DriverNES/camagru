<?php
	require("install.php");
	// global $db;
	$db = new Db(
				array	(
						"servername"	=> "localhost",
						"username"		=> "root",
						"password"		=> "123456",
						"dbname"		=> "CAMAGRU"
						)
				);
	$columns = array	(
						"userID INT not NULL AUTO_INCREMENT PRIMARY KEY",
						"username VARCHAR(20) not NULL",
						"`password` VARCHAR(255) not NULL",
						"email VARCHAR(50) not NULL",
						"token VARCHAR(255) not NULL",
						"verified TINYINT(1) NOT NULL DEFAULT '0'"
						);
	$db->createTABLE(
					array	(	"name"		=>"USERS",
								"columns"	=>$columns
							)
					);

	function toQuote($string)
	{
		return "'".$string."'";
	}

	function sendMail($mail)
	{
		$to			=	$mail["to"];										//'noreply@localhost.co.za';
		$subject	=	$mail["subject"];									//'Camagru Verify Your Account';
		$message	=	$mail["message"];									//'hello';
		$headers	=	"From: ".$mail["headers"]["from"]."\r\n".			//'From: noreply@localhost.co.za' . "\r\n" .
						"Reply-To: ".$mail["headers"]["Reply-To"]."\r\n".	//'Reply-To: noreply@localhost.co.za' . "\r\n" .
						"X-Mailer: ".$mail["headers"]["X-Mailer"];			//'X-Mailer: PHP/' . phpversion();
		mail($to, $subject, $message, $headers);
	}
	//$db->closeConnnections();
?>