<?php
require 'PHPMailer/PHPMailerAutoload.php';
try {
	if(isset($_POST['email_send'])) {
		$mail = new PHPMailer;
		$mail->FromName   = $_POST['u_name'];
		$to_email = $_POST['u_email'];
		$mail->AddAddress($to_email);
		$mail->From       = "ReadingRight Tech <tech@readingright.in>";		
		$mail->Subject  = "In response to your email please go thru ";
		$body = "<table>
			 <tr>
				<th colspan='2'> http://xkcd.com/info.0.json ; http://xkcd.com/614/info.0.json</th>
			 </tr>
			 <tr>
				<td>Name :</td>
				<td>".$_POST['u_name']."</td>
			 </tr>
			 <tr>
			  <td>E-mail : </td>
			  <td>".$_POST['u_email']."</td>
			</tr>	
			<tr>
			  <td>Message : </td>
			  <td>".$_POST['message']."</td>
			</tr>
			<table>";
		$body = preg_replace('/\\\\/','', $body);
		$mail->MsgHTML($body);		
		$mail->IsSendmail();
		$mail->AddReplyTo("admin@phpzag.com");
		$mail->AltBody    = "https://c.xkcd.com/random/comic"; 
		$mail->WordWrap   = 80; 
		$mail->AddAttachment =  "https://c.xkcd.com/random/comic";
		$mail->IsHTML(true);
		$mail->Send();
		echo 'The message has been sent.';
	}
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
?>