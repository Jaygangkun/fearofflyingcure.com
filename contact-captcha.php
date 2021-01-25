<?php
error_reporting(0);
session_start();


	if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message'])) {
	   echo '{"response":"invalid","comment":"Please fill in all fields"}';
	} else{
		if(/*empty($_POST['g-recaptcha-response'])*/false) {
		     echo '{"response":"invalid","comment":"Could not check your validity!"}';
		} else {
		    /*$vars = [
                'response' => $_POST['g-recaptcha-response'],
                'secret' => '6LdgyG4UAAAAAHtXQW-NJAVwPnX7N8-yWDqGLxG9',
            ];
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($vars));
            $response = curl_exec($ch);
            curl_close($ch);*/
            if(/*json_decode($response)->success*/true) {
                $to = "gtarlow@gmail.com"; 
		        $subject="Contact info";   // subject of mail
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
                } else {
                    echo '{"response":"error","comment":"Could not validate your captcha!"}';
                }
		}
}
?>

 