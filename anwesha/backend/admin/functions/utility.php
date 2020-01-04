<?php

function send_email($email,$subject,$msg,$headers){
// 	return (mail($email,$subject,$msg,$headers));

	require "PHPMailerAutoload.php";

	$mail = new PHPMailer;

	//$mail->SMTPDebug = 4;                               // Enable verbose debug output

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'tls://smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = "email";                 // SMTP username
	$mail->Password = "password"; 
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                       // TCP port to connect to

	$mail->setFrom('curator@anwesha.info', 'Anwesha2k20');
	$mail->addAddress($email);     // Add a recipient
	//$mail->addAddress('ellen@example.com');               // Name is optional
	$mail->addReplyTo('curator@anwesha.info', 'Information');
	//$mail->addCC('cc@example.com');
	//$mail->addBCC('bcc@example.com');

	// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = $subject;
	$mail->Body    = $msg;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	    // echo 'Message could not be sent.';
		// echo 'Mailer Error: ' . $mail->ErrorInfo;
	    return false;
	} else {
	  //  echo 'Message has been sent';
	    return true;
	}
}


function send_bulk_email($data_emails,$subject,$msg,$headers){
	// 	return (mail($email,$subject,$msg,$headers));
	
		// require "PHPMailerAutoload.php";
		require_once('PHPMailerAutoload.php');
	
		$mail = new PHPMailer;
	
		//$mail->SMTPDebug = 4;                               // Enable verbose debug output
	
		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'tls://smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = "celesta19iitp@gmail.com";                 // SMTP username
		$mail->Password = "celesta19@iitp.ac.in";  
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to
	
		$mail->setFrom('celesta19iitp@gmail.com', 'Celesta2k19');
		$mail->addAddress('ashyadavash@gmail.com');     // Add a recipient
		$mail->addReplyTo('celesta19iitp@gmail.com', 'Information');
		foreach($data_emails as $email) {
			$mail->addBCC($email);
		}
	
		// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML
	
		$mail->Subject = $subject;
		$mail->Body    = $msg;
		$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
	
		if(!$mail->send()) {
			return false;
		} else {
			return true;
		}
	}

// //Function to generate random celestaID
// function getCelestaId(){
// 	$exist=true;
// 	while ($exist) {
// 		$celestaid="CLST".mt_rand(1001,9999);
// 		$exist=celestaid_exists($celestaid);
// 	}
// 	return $celestaid;
// }

// //To check if the given username already exists or not
// function celestaid_exists($celestaid){
// 	$sql="SELECT id FROM users WHERE celestaid='$celestaid'";
// 	$result=query($sql);
// 	if(row_count($result)==1){
// 		return true;
// 	}
// 	else{
// 		return false;
// 	}
// }

function getAnweshaId(){
	$sql="SELECT anweshaid FROM users ORDER BY id DESC LIMIT 1";
	$result=query($sql);
	if(row_count($result)){
		$row=fetch_array($result);
		$anw=substr($row['anweshaid'],3,7);
		$anw= (int)$anw + 1 ;
		$anweshaid= "ANW".$anw;
	}else{
		$anweshaid="ANW2000";
	}
	return $anweshaid;
}
