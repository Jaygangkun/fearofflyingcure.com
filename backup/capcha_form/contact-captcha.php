<?php
error_reporting(0);
session_start();




	if ($_POST['check_captcha']!= $_SESSION['captcha']) {
		
	   echo '{"response":"invalid","comment":"Invalide Security Code"}';
	   
	} else{
		
		$to = "hotelobamaghana@gmail.com"; 
		//$to = "kanika.webtakers@gmail.com"; //sender mail id 
		$subject="Hotel Obama";   // subject of mail
		$body = "Contact Us \n". //custom messge change here
		"Name: ".$_POST['name']." \n".
		"Email: ".$_POST['email']." \n".
		"Phone Number: ".$_POST['phone']." \n".
		"Message: ".$_POST['message']." \n";
		
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

 