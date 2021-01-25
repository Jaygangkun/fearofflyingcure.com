<!DOCTYPE html>
<html lang="en">
<head>
<title>Fear of Flying Treatment L.A. | Home</title>
<link rel="shortcut icon" type="image/png" href="images/favicon.png"/>
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<script type="application/x-javascript">
 		addEventListener("load", function () {
 			setTimeout(hideURLbar, 0);
 		}, false);
   		function hideURLbar() {
 			window.scrollTo(0, 1);
 		}
 	</script>
<!--// Meta tag Keywords -->
<!-- css files -->
<link rel="stylesheet" href="css/bootstrap.css">
<!-- Bootstrap-Core-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style-CSS -->
<link rel="stylesheet" href="css/fontawesome-all.css">
<!-- Font-Awesome-Icons-CSS -->
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<!-- //web-fonts -->
<script type="text/javascript" src="js/jquery.min1.js"></script>
<link rel="stylesheet" href="css/menu.css" />
<script src="js/animated-menu.js" type="text/javascript"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>
<!--Header-->
<header>
  <div class="container agile-banner_nav">
    <nav class="navbar navbar-expand-lg navbar-light bg-light"> <a class="navbar-brand" href="index.html"><img src="images/logo.png"> </a> </nav>
  </div>
</header>
<div class="nav-bg">
  <div class="nav">
    <ul>
      <li><a href="index.html">HOME</a></li>
      <li> <a href="flyingtest.html">Fear Of Flying Test</a> </li>
      <li> <a href="otherfears.html">Other Fears</a> </li>
      <li> <a href="staff.html">Staff</a> </li>
      <li> <a href="fearofflyinglinks.html">Fear Of Flying Links</a> </li>
      <li> <a href="testimonials.html">Testimonials</a> </li>
      <li> <a href="contact.html" class="active">Contact</a> </li>
    </ul>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<!-- inner page banner-->
<div class="inner-banner"style="background-image: url(images/bg2.jpg)">
  <h1>Contact Us</h1>
</div>
<!-- //inner page banner-->
<!-- Contact page -->
<section class="contact py-5 my-lg-5">
  <div class="container">
    <div class="row contact_information">
      <div class="col-md-6 contact_left p-lg-5 p-4">
        <h3 class="mb-3"> Center For Virtual Reality Therapy</h3>
        <p><strong>Dr. Gerald Tarlow</strong> </p>
        <p><strong>Dr. Alan Berkowitz</strong> </p>
        <p><strong>Dr. Nan Tarlow</strong> </p>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3301.67996899632!2d-118.65492118538589!3d34.154528919781505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c29e137f1ed7a7%3A0x67b8dcbaf6ba6d75!2s5000+Parkway+Calabasas%2C+Calabasas%2C+CA+91302%2C+USA!5e0!3m2!1sen!2sin!4v1527932962807" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br>
        <br>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3306.364485255914!2d-118.48078388539842!3d34.034520326112585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bb49333f2e2b%3A0xd94c649bf1e50e51!2s2444+Wilshire+Blvd%2C+Santa+Monica%2C+CA+90403%2C+USA!5e0!3m2!1sen!2sin!4v1528951204853" width="100%" height="10" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="col-md-6 mt-md-0 mt-4">
        
        
        
        <?php
error_reporting(0);
session_start();

 

	if ($_POST['check_captcha']!= $_SESSION['captcha']) {
		
	     '{"Response":"Invalid","comment":"Invalid  Security Code"}';
	   
	} else{
		
		$to = "gtarlow@gmail.com"; 
		//$to = "kanika.webtakers@gmail.com"; //sender mail id 
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

        
        
        
        
        
        
        
        <div class="contact_right p-lg-5 p-4">
          <script language="JavaScript" src="js/gen_validatorv4.js"  type="text/javascript"></script>
          <form action="" name="form1" method="post" id="contact_form">
            <div class="w3_agileits_contact_left">
              <h3 class="mb-3">Contact form</h3>
              <input id="contactName" type="text" name="name" placeholder="Your Name" >
              <input id="contactEmail" type="email" name="email" placeholder="Your Email" >
              <input id="contactPhone" type="text" name="phone" placeholder="Phone Number" >
              <textarea id="contactText" name="msg"  placeholder="Your Description Here..." ></textarea>
            </div>
            <div id="capctha-field"> <img src="captcha.php" id="captcha"  /><br>
              <a href="javascript:void(0);" onClick="
              document.getElementById('captcha').src='captcha.php?'+Math.random();
              document.getElementById('captcha-form').focus();"
              id="change-image"> Try another text</a> </div>
            <input name="check_captcha" id="check_captcha" placeholder="Type The Word Here" type="text"  />
            <div class="w3_agileits_contact_right">
              <input id="buttonSub" name="submit" type="submit" value="Submit" class="submit" />
              <br />
              <br />
            </div>
            <div class="clearfix"> </div>
          </form>
          <script language="JavaScript" type="text/javascript" xml:space="preserve">

	  

  var frmvalidator  = new Validator("form1");

   

  frmvalidator.addValidation("name","req","Please enter your  Name");

  

   frmvalidator.addValidation("phone","req","Please enter your Phone");

   

    frmvalidator.addValidation("email","req","Please enter your Email");

  frmvalidator.addValidation("email","email");

    

   frmvalidator.addValidation("msg","req","Please enter Comments");

   

     frmvalidator.addValidation("check_captcha","req","Please enter Captcha");





</script>
        </div>
      </div>
      <div class="col-md-6">
        <div class="mt-5 information">
          <div class="row">
            <div class="col-sm-2 mb-sm-0 mb-3"> <i class="fas fa-comments"></i> </div>
            <div class="col-sm-10">
              <h4 class="text-uppercase mb-4">5000 N. Parkway Calabasas</h4>
              <p class="mb-3 text-capitalize"> Suite 218<br>
                Calabasas, CA 91302<br>
                (818) 465-8778 <br>
                <a href="mailto:vrtherapy@gmail.com">vrtherapy@gmail.com</a> </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 mt-md-5 mt-2 information">
        <div class="row">
          <div class="col-sm-2 mb-sm-0 mb-3"> <i class="fas fa-life-ring"></i> </div>
          <div class="col-sm-10">
            <h4 class="text-uppercase mb-4"> 2444 Wilshire Blvd.</h4>
            <p class="mb-3 text-capitalize"> Suite 508<br>
              Santa Monica, CA 90403<br>
              (818)465-8778 <br>
              <a href="mailto:vrtherapy@gmail.com">vrtherapy@gmail.com</a> </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="copyright py-4">
  <div class="container">
    <div class="copyrightgrids row">
      <div class="col-lg-6 col-12">
        <p>(818) 465-8778 | <a href="mailto:vrtherapy@gmail.com">vrtherapy@gmail.com</a></p>
        <p>© 2018 fearofflying . All Rights Reserved | Design by <a href="http://webtakersit.com/" target="_blank">webtakersit</a></p>
      </div>
      <div class="col-lg-6 col-12">
        <ul class="social text-right mt-lg-0 mt-3">
          <li>
            <p class="mx-2 text-capitalize">Fear of Flying Treatment Los Angeles L.A.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- //copyright -->
<!-- js-scripts -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<!-- Necessary-JavaScript-File-For-Bootstrap -->
<!-- //js -->
<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">

		jQuery(document).ready(function($) {

			$(".scroll").click(function(event){		

				event.preventDefault();

				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);

			});

		});

	</script >
<!-- here stars scrolling icon -->
<script type="text/javascript">

		$(document).ready(function() {

			/*

				var defaults = {

				containerID: 'toTop', // fading element id

				containerHoverID: 'toTopHover', // fading element hover id

				scrollSpeed: 1200,

				easingType: 'linear' 

				};

			*/

								

			$().UItoTop({ easingType: 'easeOutQuart' });

								

			});

	</script>
<!-- //here ends scrolling icon -->
<!-- start-smoth-scrolling -->
<!-- //js-scripts -->
</body>
</html>
