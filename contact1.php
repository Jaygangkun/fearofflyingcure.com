<?php
error_reporting(0);
session_start();

 

	if ($_POST['check_captcha']!= $_SESSION['captcha']) {
		
	   echo '{"Response":"Invalid","comment":"Invalid  Security Code"}';
	   
	} else{
		
		$to = "shailesh.lekhwar.webtakers@gmail.com"; 
		//$to = "gtarlow@gmail.com; //sender mail id 
		$subject="Contact Form Info";   // subject of mail
		$body = "Contact Us \n". //custom messge change here
		"Name: ".$_POST['name']." \n".
		"Phone: ".$_POST['phone']." \n".
		"Email: ".$_POST['email']." \n".
		"Comments: ".$_POST['msg']." \n";
		
		$email=$_POST['email'];  //email id of visitoe 
		$headers = "From: $email \r\n"; 
		$headers .= "Reply-To: $email \r\n";
		$send=mail($to, $subject, $body,$headers);
		
		if($send){
			echo '{"response":"success","comment":"mail sent"}';
					
		}else{
			echo '{"response":"error","comment":"mail failed"}';
		}
	
}
 
 

?>
